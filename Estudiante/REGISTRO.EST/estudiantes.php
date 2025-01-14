<?php

include "../../modelos/Db.php";

class estudiante
{
	public function registroEstudiante($datos)
	{
		$c = new Connection();
		$conexion = $c->conexion();

		//$fecha=date('Y-m-d');
		$query = $conexion->query("SELECT * FROM estudiante WHERE Ced_Est = '$datos[0]'");


		$numRows = $query->rowCount();
		if ($numRows > 0) {

			echo '<script>alert (" Numero de cedula ya existe ");</script>';
			echo '<script>document.location.href="estudiante.php?p=test" </script>';
			return true;
		} else {
			$sql = "INSERT into estudiante (
								Ced_Est,
								Apell_Est,
								Nom_Est,
								Fec_Nac,
								Luga_Nac,
								Nacionalidad,
								Dir_Exac,
								Id_Repres)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]')";
			$conexion->query($sql);
		}
	}
}
