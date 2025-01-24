<?php

namespace SABL\Modelos;

use Illuminate\Database\Eloquent\Model;

final class Usuario extends Model {
  protected $table = 'seguridad';

  static function cantidadDeAdministradores(): int {
    return self::query()->where('Privilegio', 'A')->count();
  }
}
