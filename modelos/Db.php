<?php

class Connection
{
  public $table = 'seguridad';
  private $driver = 'mysql';
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbName = 'sabl.sistema';
  private $charset = 'utf8';

  public function conexion()
  {
    try {
      $pdo = new PDO(
        "{$this->driver}:host={$this->host};dbname={$this->dbName};charset={$this->charset}",
        $this->user,
        $this->pass
      );

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $pdo;
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  /**
   * @return array<int, array{
   *   Id_usuario: int,
   *   Cedula: int,
   *   Nombres: string,
   *   Apellidos: string,
   *   Usuario: string,
   *   Clave: string,
   *   Privilegio: string
   * }>
   */
  function getAll()
  {
    $con = $this->conexion();
    $query = $con->query("SELECT * FROM $this->table");
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    return $query;
  }

  private function create_insert_sql($array_data)
  {
    try {
      if ($this->table == '') {
        throw new Exception('Tabla no asignada');
      }

      $fields = implode(',', array_keys($array_data)); # Toma las claves del arreglo como nombres de columnas
      $placeholders = implode(',', array_map(fn($key) => ":$key", array_keys($array_data))); # No hay nescesidad de explicar esto
      $sql = "INSERT INTO {$this->table} ($fields) VALUES ($placeholders)"; # Genera el SQL

      return $sql; # Devuelve el sql
    } catch (Exception $e) {
      echo 'Error: ' . $e->getMessage();  // Manejo de excepciones

      exit; # Mata la ejecucion del codigo
    }
  }

  function create($array_data)
  {
    try {
      $conn = $this->conexion();
      $db = $conn->prepare($this->create_insert_sql($array_data)); # Prepara el registro
      $db->execute($array_data); # Ejecuta y pasa los datos
    } catch (Exception $e) {
      echo 'Error: ' . $e->getMessage(); // Manejo de excepciones

      exit; # Mata la ejecucion del codigo
    }
  }
}

/** @deprecated */
class Database
{
  // SE crean variables privadas que me permitira hacer la conexion con la base de datos
  private $servername; // nombre del servidor
  private $user; // el usuario dentro del servidor en nuestro el que tiene por defecto phpmyadmin
  private $password; // password en caso tal que se haya una
  private $dbname; // nombre de la base de datos

  // se crea la funcion constructora en el que se le asigana los valores a cada variable
  public function __construct()
  {
    $this->servername = 'localhost';
    $this->user = 'root';
    $this->password = '';
    $this->dbname = 'sabl.sistema';
  }

  // Declaramos la funcion que nos permitira hacer la conexion con la base de datos
  public function connect()
  {
    $conn = new mysqli($this->servername, $this->user, $this->password, $this->dbname);

    return $conn;
  }
}
