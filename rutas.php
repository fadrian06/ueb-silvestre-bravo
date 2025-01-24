<?php

app()->group('/ingreso', ['middleware' => 'auth.guest', function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.ingreso'));
}]);

app()->group('/', ['middleware' => 'auth.required', function (): void {
  app()->get('/', function (): void {
    echo 'home';
  });
}]);
