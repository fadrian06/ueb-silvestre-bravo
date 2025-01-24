<?php

app()->group('/ingreso', ['middleware' => function (): void {
  if (auth()->id()) {
    response()->redirect('/');
  }
}, function (): void {
  app()->get('/', static fn() => Blade::renderizar('paginas.ingreso'));
}]);

app()->group('/', ['middleware' => function (): void {
  if (!auth()->id()) {
    response()->redirect('/ingreso');
  }
}, function (): void {
  app()->get('/', function (): void {
    echo 'home';
  });
}]);
