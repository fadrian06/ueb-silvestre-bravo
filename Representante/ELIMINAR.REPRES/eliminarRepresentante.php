<?php

require_once "../../modelos/Db.php";

class representanteEliminar
{
  public function eliminarRepresentante()
  {
    $c = new Connection();
    $conexion = $c->conexion();
    $id = $_GET["id"];
    $sql = "DELETE FROM representante where Id_Repres=$id";
    $conexion->query($sql);
  }
}

$representante = new representanteEliminar;
$representante->eliminarRepresentante();

echo '<script>alert (" Representante eliminado con Exito ");</script>';
echo '<script>document.location.href="../../representante x.php" </script>';
