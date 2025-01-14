<?php

use SABL\Controladores\ControladorDeUsuario;

require_once __DIR__ . '/../vendor/autoload.php';
require_once '/sistema/modelos/Db.php';

// creamos una nueva clase que hereda atributos de otra clase llamada Database
/** @deprecated */
class User extends Database
{
  // Creamos una funcion que en este caso va a obtener un parametro que es el usuario y la clave
  public function getUser($username, $password)
  {
    return ControladorDeUsuario::procesarIngreso($username, $password);
  }
}
