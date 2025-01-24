<?php

app()->group('/ingreso', ['middleware' => 'auth.guest', static function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.ingreso'));

  app()->post('/', static function (): void {
    $credenciales = request()->body();

    $autenticadoExitosamente = auth()->login([
      'usuario' => $credenciales['usuario'],
      'password' => $credenciales['clave']
    ]);

    if ($autenticadoExitosamente) {
      response()->redirect('/');
    } else {
      response()->redirect('/ingreso');
    }
  });
}]);

app()->group('/crear-cuenta', ['middleware' => 'admin.only-one', static function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.crear-cuenta'));

  app()->post('/', static function (): void {
    $datos = request()->body();

    auth()->register([
      'Cedula' => $datos['cedula'],
      'Nombres' => str_replace('  ', ' ', mb_convert_case($datos['nombres'], MB_CASE_TITLE)),
      'Apellidos' => str_replace('  ', ' ', mb_convert_case($datos['apellidos'], MB_CASE_TITLE)),
      'Usuario' => $datos['usuario'],
      'password' => $datos['clave'],
      'Privilegio' => 'A'
    ]);

    auth()->login([
      'Usuario' => $datos['usuario'],
      'password' => $datos['clave']
    ]);

    response()->redirect('/');
  });
}]);

app()->group('/', ['middleware' => 'auth.required', static function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.inicio'));

  app()->get('/salir', static function (): void {
    auth()->logout();
    response()->redirect('/ingreso');
  });

  app()->get('/respaldar', static function (): void {
    if (mb_strtolower($_ENV['DB_CONNECTION']) === 'mysql') {
      $nombreRespaldo = 'respaldo-' . date('Y-m-d-H-i-s') . '.sql';
      $ruta = __DIR__ . "/almacenamiento/respaldos/$nombreRespaldo";

      $sql = `{$_ENV['MYSQLDUMP_PATH']} --user={$_ENV['DB_USERNAME']} --password={$_ENV['DB_PASSWORD']} --host={$_ENV['DB_HOST']} {$_ENV['DB_DATABASE']}`;
      file_put_contents($ruta, $sql);
      response()->download($ruta, $nombreRespaldo);
    }
  });

  app()->group('/restaurar', static function (): void {
    app()->get('/', static function (): void {
      if (mb_strtolower($_ENV['DB_CONNECTION']) === 'mysql') {
        Blade::renderizar('paginas.respaldar.mysql', [
          'rutasArchivos' => glob(__DIR__ . '/almacenamiento/respaldos/*.sql')
        ]);
      }
    });

    app()->post('/', static function (): void {
      $respaldo = request()->files('respaldo');

      if ($respaldo !== null) {
        $nombreArchivo = $respaldo['name'];
        $ruta = __DIR__ . "/almacenamiento/respaldos/$nombreArchivo";

        move_uploaded_file($respaldo['tmp_name'], $ruta);
        response()->redirect("/restaurar/$nombreArchivo");
      }
    });

    app()->get('/{nombreArchivo}', static function (string $nombreArchivo): void {
      $ruta = __DIR__ . "/almacenamiento/respaldos/$nombreArchivo";

      if (file_exists($ruta)) {
        $sql = file_get_contents($ruta);
        $comandos = explode(';', $sql);

        foreach ($comandos as $comando) {
          if (trim($comando) !== '') {
            db()->query($comando);
          }
        }
      }

      response()->redirect('/restaurar');
    });
  });

  app()->get('/respaldos/{nombreArchivo}/eliminar', static function (string $nombreArchivo): void {
    $ruta = __DIR__ . "/almacenamiento/respaldos/$nombreArchivo";

    if (file_exists($ruta)) {
      unlink($ruta);
    }

    response()->redirect('/restaurar');
  });
}]);
