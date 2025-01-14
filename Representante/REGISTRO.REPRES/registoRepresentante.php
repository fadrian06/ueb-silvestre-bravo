<?php 

	
	require_once "representantes.php";

	$obj= new representante();

	$cedula=($_POST['Ced_Repres']);
	
	$datos=array(
		$cedula,
		$_POST['Apell_Repres'],
		$_POST['Nom_Repres'],
		$_POST['Fec_Nac'],
		$_POST['Luga_Nac'],
		$_POST['Nacionalidad'],
		$_POST['Dir_Exac'],
		$_POST['Afin_con_Est'],
		$_POST['Email_Repres'],
		$_POST['Telf_Repres']
				);

	echo $obj->registroRepresentante($datos);
	echo '<script>alert (" Representante Registrado con Exito ");</script>';
echo '<script>document.location.href="representante.php?p=test" </script>';  

 ?>