<?php


require_once "profesores.php";

$obj = new profesor();

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

echo $obj->registroProfesor($datos);
echo '<script>alert (" Profesor Registrado con Exito ");</script>';
echo '<script>document.location.href="../profesor x.php" </script>';
