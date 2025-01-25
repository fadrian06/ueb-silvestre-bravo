<?php

namespace SABL\Controladores;

use Blade;
use Leaf\Helpers\Password;
use SABL\Modelos\Estudiante;

final readonly class ControladorDeEstudiantes extends Controlador
{
  static function mostrarEstudiantes(): void
  {
    $estudiantes = Estudiante::with(['representante'])->get();

    Blade::renderizar(
      'paginas.estudiantes.listado',
      compact('estudiantes')
    );
  }

  static function mostrarFormularioDeRegistro(): void
  {
    Blade::renderizar('paginas.estudiantes.registrar');
  }

  static function registrarEstudiante(): void
  {
    $datos = self::obtenerDatosValidados(request()->body());
    self::enviarErroresDeValidacionSiExisten('/estudiantes/registrar');

    $ultimoId = db()
      ->select('estudiante', 'Id_Est')
      ->orderBy('Id_Est')
      ->limit(1)
      ->column();

    (new Estudiante([
      'Id_Est' => $ultimoId + 1,
      'Ced_Est' => $datos['cedula'],
      'Nom_Est' => str_replace('  ', ' ', mb_convert_case($datos['nombres'], MB_CASE_TITLE)),
      'Apell_Est' => str_replace('  ', ' ', mb_convert_case($datos['apellidos'], MB_CASE_TITLE)),
      'Fec_Nac' => $datos['fechaNacimiento'],
      'Luga_Nac' => str_replace('  ', ' ', mb_convert_case($datos['lugarNacimiento'], MB_CASE_TITLE)),
      'Nacionalidad' => $datos['nacionalidad'],
      'Dir_Exac' => str_replace('  ', ' ', mb_convert_case($datos['direccion'], MB_CASE_TITLE)),
      'Id_Repres' => $datos['idRepresentante']
    ]))->save();

    response()->redirect('/estudiantes');
  }

  static function eliminarEstudiante(int $id): void
  {
    Estudiante::query()->find($id)->delete();
    response()->redirect('/estudiantes');
  }

  static function mostrarFormularioDeEdicion(int $id): void
  {
    Blade::renderizar(
      'paginas.estudiantes.editar',
      ['estudiante' => Estudiante::query()->find($id)]
    );
  }

  static function actualizarEstudiante(int $id): void
  {
    $datos = self::obtenerDatosValidados(request()->body());
    self::enviarErroresDeValidacionSiExisten("/estudiantes/$id/editar");

    $estudiante = Estudiante::query()->find($id);
    $estudiante->Nacionalidad = $datos['nacionalidad'];
    $estudiante->Ced_Est = $datos['cedula'];
    $estudiante->Nom_Est = str_replace('  ', ' ', mb_convert_case($datos['nombres'], MB_CASE_TITLE));
    $estudiante->Apell_Est = str_replace('  ', ' ', mb_convert_case($datos['apellidos'], MB_CASE_TITLE));
    $estudiante->Fec_Nac = $datos['fechaNacimiento'];
    $estudiante->Luga_Nac = str_replace('  ', ' ', mb_convert_case($datos['lugarNacimiento'], MB_CASE_TITLE));
    $estudiante->Dir_Exac = str_replace('  ', ' ', mb_convert_case($datos['direccion'], MB_CASE_TITLE));
    $estudiante->Id_Repres = $datos['idRepresentante'];
    $estudiante->save();
    response()->redirect('/estudiantes');
  }

  private static function obtenerDatosValidados(array $datosSinValidar): ?array {
    return form()->validate($datosSinValidar, [
      'cedula' => 'number|min:1',
      'nombres' => 'names',
      'apellidos' => 'names',
      'fechaNacimiento' => 'date',
      'lugarNacimiento' => 'address',
      'nacionalidad' => 'nationality',
      'direccion' => 'address',
      'idRepresentante' => 'number'
    ]) ?: null;
  }
}
