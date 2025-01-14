<?php 

	
	require_once "usuarios.php";

	$obj= new usuarios();

	$pass=sha1($_POST['Clave']);
	$datos=array(
		$_POST['Cedula'],
		$_POST['Nombres'],
		$_POST['Apellidos'],
		$_POST['Usuario'],
		$pass,
		$_POST['Privilegio']
				);

	echo $obj->registroUsuario($datos);
	echo '<script>alert (" Usuario Registrado con Exito ");</script>';
echo '<script>document.location.href="../usuario.php?p=test" </script>';  

 ?>