<?php

require_once '../modelos/Db.php';

class usuarios
{
  public function registroUsuario($datos)
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
}
