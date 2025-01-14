<?php

use SABL\Modelos\Usuario;

require_once __DIR__ . '/../vendor/autoload.php';

$pass = sha1($_POST['Clave']);

$datos = [
  $_POST['Cedula'],
  $_POST['Nombres'],
  $_POST['Apellidos'],
  $_POST['Usuario'],
  $pass,
  $_POST['Privilegio']
];

Usuario::insertar($datos);
echo '<script>alert (" Usuario Registrado con Exito ");</script>';
echo '<script>document.location.href="usuario.php?p=test" </script>';
