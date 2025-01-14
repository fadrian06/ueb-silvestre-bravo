<?php

namespace SABL\Modelos;

use Connection;
use PDO;

require_once __DIR__ . '/Db.php';

final class Usuario extends Connection
{
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
  static function todos(): array
  {
    return (new self)->getAll();
  }

  static function insertar(array $datos): void
  {
    $c = new Connection;
    $conexion = $c->conexion();
    $query = $conexion->query("SELECT * FROM seguridad WHERE Cedula = '$datos[0]'");
    $numRows = $query->rowCount();

    if ($numRows > 0) {
      echo '<script>alert (" Numero de cedula ya existe ");</script>';
      echo '<script>document.location.href="usuario.php?p=test" </script>';

      return true;
    } else {
      $sql = "
        INSERT into seguridad (
          Cedula,
          Nombres,
          Apellidos,
          Usuario,
          Clave,
          Privilegio
        ) values (
          '$datos[0]',
          '$datos[1]',
          '$datos[2]',
          '$datos[3]',
          '$datos[4]',
          '$datos[5]'
        )
      ";

      $conexion->query($sql);
    }
  }

  /**
   * @return array{
   *   Id_usuario: int,
   *   Cedula: int,
   *   Nombres: string,
   *   Apellidos: string,
   *   Usuario: string,
   *   Clave: string,
   *   Privilegio: string
   * }
   */
  static function obtenerPorId(int $id): array
  {
    $model = new Connection;
    $con = $model->conexion();
    $data = $con->query("SELECT * FROM usuario WHERE Id_usuario=$id");
    $data = $data->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  static function eliminarPorId(int $id): void
  {
    $c = new Connection();
    $conexion = $c->conexion();
    $sql = "DELETE FROM seguridad where Id_usuario =$id";
    $conexion->query($sql);
  }
}
