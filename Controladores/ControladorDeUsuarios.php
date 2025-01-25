<?php

namespace SABL\Controladores;

use Blade;
use Leaf\Helpers\Password;
use SABL\Modelos\Usuario;

final readonly class ControladorDeUsuarios extends Controlador
{
  static function mostrarUsuarios(): void
  {
    Blade::renderizar('paginas.usuarios.listado');
  }

  static function mostrarFormularioDeRegistro(): void
  {
    Blade::renderizar('paginas.usuarios.registrar');
  }

  static function registrarSecretario(): void
  {
    $datos = request()->body();
    $id = db()->select('seguridad', 'id')->orderBy('id')->limit(1)->column() + 1;

    (new Usuario([
      'id' => $id,
      'Cedula' => $datos['cedula'],
      'Nombres' => str_replace('  ', ' ', mb_convert_case($datos['nombres'], MB_CASE_TITLE)),
      'Apellidos' => str_replace('  ', ' ', mb_convert_case($datos['apellidos'], MB_CASE_TITLE)),
      'Usuario' => $datos['usuario'],
      'password' => Password::hash($datos['clave']),
      'Privilegio' => 'S'
    ]))->save();

    response()->redirect('/usuarios');
  }

  static function eliminarUsuario(int $id): void
  {
    Usuario::query()->find($id)->delete();
    response()->redirect('/usuarios');
  }
}
