<?php

use SABL\Modelos\Usuario;

require_once __DIR__ . '/../vendor/autoload.php';
require_once '../modelos/Db.php';

/** @deprecated */
class usuarios
{
  public function registroUsuario($datos)
  {
    Usuario::insertar($datos);
  }
}
