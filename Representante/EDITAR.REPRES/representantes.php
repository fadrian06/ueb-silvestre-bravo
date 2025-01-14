<?php

require_once "../../modelos/Db.php";

class representante
{
  public function registroRepresentante($datos)
  {
    $c = new Connection;
    $conexion = $c->conexion();

    $sql = "UPDATE representante SET
      Ced_Repres = '$datos[0]',
      Apell_Repres = '$datos[1]',
      Nom_Repres = '$datos[2]',
      Fec_Nac = '$datos[3]',
      Luga_Nac = '$datos[4]',
      Nacionalidad = '$datos[5]',
      Dir_Exac = '$datos[6]',
      Afin_con_Est = '$datos[7]'
      Email_Repres = '$datos[8]'
      Telf_Repres = '$datos[9]
    ";

    $conexion->query($sql);
  }
}
