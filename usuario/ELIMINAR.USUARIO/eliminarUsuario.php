<?php

require_once "../../modelos/Db.php";

class usuarioEliminar
{
  public function eliminarUsuario()
  {
    $c = new Connection();
    $conexion = $c->conexion();
    $id = $_GET["id"];
    $sql = "DELETE FROM seguridad where Id_usuario =$id";
    $conexion->query($sql);
  }
}

$usuario = new usuarioEliminar;
$usuario->eliminarUsuario();

echo '<script>alert (" Usuario eliminado con Exito ");</script>';
echo '<script>document.location.href="../../usuario x.php" </script>';
