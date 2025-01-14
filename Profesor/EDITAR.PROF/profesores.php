<?php

require_once "../../modelos/Db.php";

class profesor
{
  public function registroProfesor($datos)
  {
    $c = new Connection;
    $conexion = $c->conexion();

    $sql = "
      UPDATE profesor SET
      Ced_Prof = '$datos[0]',
      Nom_Prof = '$datos[1]',
      Apell_Prof = '$datos[2]',
      Fec_Nac = '$datos[3]',
      Luga_Nac = '$datos[4]',
      Codigo_Carg_Prof = '$datos[5]',
      Codigo_Domina = '$datos[6]',
      Email_Prof = '$datos[7]'
      Telf_Prof = '$datos[8]'
      Fec_Registro = '$datos[9]
    ";

    $conexion->query($sql);
  }
}
