<?php

app()->group('/ingreso', ['middleware' => 'auth.guest', function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.ingreso'));
  app()->post('/', static function (): void {
    $credenciales = request()->body();

    if (!auth()->login($credenciales)) {
      response()->redirect('/');
    } else {
      response()->redirect('/ingreso');
    }
  });
}]);

app()->group('/', ['middleware' => 'auth.required', function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.inicio'));

  app()->get('/salir', function (): void {
    auth()->logout();
    response()->redirect('/ingreso');
  });
}]);
