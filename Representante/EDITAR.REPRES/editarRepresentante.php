<?php


require_once "representantes.php";

$obj = new representante();

$cedula = ($_POST['Ced_Prof']);
$datos = array(
	$cedula,
	$_POST['Nom_Prof'],
	$_POST['Apell_Prof'],
	$_POST['Fec_Nac'],
	$_POST['Codigo_Carg_Prof'],
	$_POST['Codigo_Domina'],
	$_POST['Fec_Incres_T_Minis'],
	$_POST['Email_Prof'],
	$_POST['Telf_Prof'],
	$_POST['Fec_Registro'],
);

echo $obj->registroRepresentante($datos);
echo '<script>alert (" representante Registrado con Exito ");</script>';
echo '<script>document.location.href="../representante.php?p=test" </script>';
