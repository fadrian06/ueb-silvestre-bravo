<?php

namespace SABL\Modelos;

use Illuminate\Database\Eloquent\Model;

final class Usuario extends Model {
  protected $table = 'seguridad';

  protected $fillable = [
    'id',
    'Cedula',
    'Nombres',
    'Apellidos',
    'Usuario',
    'password',
    'Privilegio'
  ];

  public $timestamps = false;

  static function cantidadDeAdministradores(): int {
    return self::query()->where('Privilegio', 'A')->count();
  }
}
