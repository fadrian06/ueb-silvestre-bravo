<?php

require_once "../../modelos/Db.php";

class estudianteEliminar
{
  public function eliminarEstudiante()
  {
    $c = new Connection;
    $conexion = $c->conexion();
    $id = $_GET["id"];
    $sql = "DELETE FROM estudiante where Id_Est=$id";
    $conexion->query($sql);
  }
}

$estudiante = new estudianteEliminar;
$estudiante->eliminarEstudiante();

echo '<script>alert (" Estudiante eliminado con Exito ");</script>';
echo '<script>document.location.href="../../estudiantes x.php" </script>';
