<?php

namespace SABL\Controladores;

use Connection;

require_once __DIR__ . '/../modelos/Db.php';

final class ControladorDeUsuario extends Connection {
  /** @return 'A'|'U'|string|bool */
  static function procesarIngreso(string $username, string $password): string|bool {
    // se crea una consulta con SELECT * FROM, que me permitira verificar si en la bbdd se encuentra la informacion segun el parametro establecido
    $sql = "SELECT * FROM seguridad WHERE Usuario = '$username' AND Clave ='$password'";
    // se crea una variable $result que permite hacer la conexion con la bbdd y ejecutar la consulta $sql de la linea anterior
    $result = (new self)->conexion()->query($sql);
    // la linea siguiente nos arroja el numero de filas segun la consulta realizada que este caso solo es 1
    $numRows = $result->rowCount();

    if ($numRows > 0) {
      $datos_usuario = $result->fetch();
      $rol2 = $datos_usuario["Privilegio"];

      if ($rol2 == "A") {
        header('Location: /sistema/home_admin.php');
      } else if ($rol2 == "U") {
        header('Location: welcome2.php');
      }

      return $rol2;
    }

    return false;
  }
}
