<?php

include "../../modelos/Db.php";

class profesor
{
    public function registroProfesor($datos)
    {
        $c = new Connection();
        $conexion = $c->conexion();

        //$fecha=date('Y-m-d');
        $query = $conexion->query("SELECT * FROM profesor WHERE Ced_Prof = '$datos[0]'");


        $numRows = $query->rowCount();
        if ($numRows > 0) {

            echo '<script>alert (" Numero de cedula ya existe ");</script>';
            echo '<script>document.location.href="profesor.php?p=test" </script>';
            return true;
        } else {
            print_r($datos);
            $sql = "INSERT into profesor (
								Ced_Prof,
								Nom_Prof,
								Apell_Prof,
								Fec_Nac,
								Codigo_Carg_Prof,
                                Codigo_Domina,
                                Fec_Incres_T_Minis,
                                Email_Prof,
								Telf_Prof),
                                Fec_Registro)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
                                '$datos[5]',
                                '$datos[6]',
                                '$datos[7]',
                                '$datos[8]',
								'$datos[9]')";
            $conexion->query($sql);
        }
    }
}
