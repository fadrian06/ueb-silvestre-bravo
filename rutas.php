<?php

use SABL\Controladores\ControladorDeCrearCuenta;
use SABL\Controladores\ControladorDeEstudiantes;
use SABL\Controladores\ControladorDeIngreso;
use SABL\Controladores\ControladorDePerfil;
use SABL\Controladores\ControladorDeRepresentantes;
use SABL\Controladores\ControladorDeUsuarios;

app()->group('/ingreso', ['middleware' => 'auth.guest', static function (): void {
  app()->get('/', [ControladorDeIngreso::class, 'mostrarIngreso']);
  app()->post('/', [ControladorDeIngreso::class, 'comprobarCredenciales']);
}]);

app()->group('/crear-cuenta', ['middleware' => 'admin.only-one', static function (): void {
  app()->get('/', [ControladorDeCrearCuenta::class, 'mostrarFormulario']);
  app()->post('/', [ControladorDeCrearCuenta::class, 'guardarCuentaDeAdministrador']);
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

  app()->group('/', ['middleware' => 'only-admins', static function (): void {
    app()->group('/usuarios', static function (): void {
      app()->get('/', [ControladorDeUsuarios::class, 'mostrarSecretarios']);
      app()->post('/', [ControladorDeUsuarios::class, 'registrarSecretario']);
      app()->get('/registrar', [ControladorDeUsuarios::class, 'mostrarFormularioDeRegistro']);
      app()->group('/{id}', static function (): void {
        app()->get('/eliminar', [ControladorDeUsuarios::class, 'eliminarSecretario']);
        app()->get('/editar', [ControladorDeUsuarios::class, 'mostrarFormularioDeEdicion']);
        app()->post('/', [ControladorDeUsuarios::class, 'actualizarSecretario']);
      });
    });
  }]);

  app()->group('/estudiantes', static function (): void {
    app()->get('/', [ControladorDeEstudiantes::class, 'mostrarListado']);
    app()->post('/', [ControladorDeEstudiantes::class, 'registrar']);
    app()->get('/registrar', [ControladorDeEstudiantes::class, 'mostrarFormularioDeRegistro']);
    app()->group('/{id}', static function (): void {
      app()->get('/eliminar', [ControladorDeEstudiantes::class, 'eliminar']);
      app()->get('/editar', [ControladorDeEstudiantes::class, 'mostrarFormularioDeEdicion']);
      app()->post('/', [ControladorDeEstudiantes::class, 'actualizar']);
    });
  });

  app()->group('/representantes', static function (): void {
    app()->get('/', [ControladorDeRepresentantes::class, 'mostrarListado']);
    app()->post('/', [ControladorDeRepresentantes::class, 'registrar']);
    app()->get('/registrar', [ControladorDeRepresentantes::class, 'mostrarFormularioDeRegistro']);
    app()->group('/{id}', static function (): void {
      app()->get('/eliminar', [ControladorDeRepresentantes::class, 'eliminar']);
      app()->get('/editar', [ControladorDeRepresentantes::class, 'mostrarFormularioDeEdicion']);
      app()->post('/', [ControladorDeRepresentantes::class, 'actualizar']);
    });
  });

  app()->group('/perfil', static function (): void {
    app()->get('/editar', [ControladorDePerfil::class, 'mostrarFormularioDeEdicion']);
    app()->post('/', [ControladorDePerfil::class, 'actualizarPerfil']);
  });
}]);
