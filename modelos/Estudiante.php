<?php

namespace SABL\Modelos;

use Connection;

require_once __DIR__ . '/Db.php';

final class Estudiante extends Connection {
  /** @return array<int, array{
   *   Id_Est: int,
   *   Ced_Est: string,
   *   Apell_Est: string,
   *   Nom_Est: string,
   *   Fec_Nac: string,
   *   Luga_Nac: string,
   *   Nacionalidad: string,
   *   Dir_Exac: string,
   *   Id_Repres: int
   * }> */
  static function todos(): array {
    $conexion = new Connection;
    $conexion->table = 'estudiante';

    return $conexion->getAll();
  }
}
