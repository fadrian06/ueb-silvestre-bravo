<?php

use SABL\Modelos\Usuario;

auth()->middleware('auth.required', static function (): void {
  if (!auth()->user()) {
    response()->redirect('/ingreso');
  }
});

auth()->middleware('auth.guest', static function (): void {
  if (auth()->user()) {
    response()->redirect('/');
  }
});

app()->registerMiddleware('admin.only-one', static function (): void {
  if (Usuario::cantidadDeAdministradores() > 0) {
    response()->redirect('/ingreso');
  }
});

app()->registerMiddleware('only-admins', static function (): void {
  if (auth()->user()?->Privilegio !== 'A') {
    response()->redirect('/');
  }
});
