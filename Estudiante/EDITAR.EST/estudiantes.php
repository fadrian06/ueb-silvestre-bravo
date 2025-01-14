<?php

require_once "../../modelos/Db.php";

class estudiante
{
  public function actualizarEstudiante($datos)
  {
    $c = new Connection;
    $conexion = $c->conexion();

    $sql = "
      UPDATE estudiante SET
        Ced_Est = '$datos[0]',
        Apell_Est = '$datos[1]',
        Nom_Est = '$datos[2]',
        Fec_Nac = '$datos[3]',
        Luga_Nac = '$datos[4]',
        Nacionalidad = '$datos[5]',
        Dir_Exac = '$datos[6]',
        Id_Repres = '$datos[7]'
      WHERE Id_Est=$datos[8]
    ";

    $conexion->query($sql);
  }
}
