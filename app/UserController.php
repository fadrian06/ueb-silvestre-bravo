<?php

use SABL\Controladores\ControladorDeUsuario;

require_once __DIR__ . '/../vendor/autoload.php';

// verificamos que exista el submit y guardamos los valores del formulario en variables
$username = $_POST['usuario'];
$password = $_POST['password'];

// comprobamos que los campos usuario y clave no este vacio
if (empty($username) || empty($password)) {
  echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
} else {
  if (ControladorDeUsuario::procesarIngreso($username, $password)) {
    session_start();
    $_SESSION['usuario'] = $username;
  } else {
    echo '<div class="alert alert-danger">Usuario no existe</div>';
  }
}
