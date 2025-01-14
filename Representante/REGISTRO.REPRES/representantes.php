<?php 

	include "../modelos/Db.php";

	class estudiante{
		public function registroRepresentante($datos){
			$c=new Connection();
			$conexion=$c->conexion();

			//$fecha=date('Y-m-d');
			$query = $conexion->query("SELECT * FROM representante WHERE Ced_Repres = '$datos[0]'");
			
            
            $numRows = $query->rowCount();
            if($numRows > 0){
                
                echo '<script>alert (" Numero de cedula ya existe ");</script>';
				echo '<script>document.location.href="representante.php?p=test" </script>';  
                return true;

            } else {
			$sql="INSERT into representante  (
								Ced_Repres,
								Apell_Repres,
								Nom_Repres,
								Fec_Nac,
								Luga_Nac,
								Nacionalidad,
								Dir_Exac,
								Afin_con_Est,
								Email_Repres,
								Telf_Repres)
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
	
		
 ?>
