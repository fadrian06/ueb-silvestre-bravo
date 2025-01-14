<?php

require_once 'estudiantes.php';

$obj = new estudiante;
$cedula = $_POST['Ced_Est'];

$datos = [
  $cedula,
  $_POST['Apell_Est'],
  $_POST['Nom_Est'],
  $_POST['Fec_Nac'],
  $_POST['Luga_Nac'],
  $_POST['Nacionalidad'],
  $_POST['Dir_Exac'],
  $_POST['Id_Repres'],
  $_POST['Id_Est'],
];

echo $obj->actualizarEstudiante($datos);
echo '<script>alert (" Estudiante Registrado con Exito ");</script>';
echo '<script>document.location.href="../estudiantes x.php" </script>';
