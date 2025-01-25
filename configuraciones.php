<?php

use Illuminate\Database\Capsule\Manager;
use Jenssegers\Date\Date;
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv)->load(__DIR__ . '/.env');
auth()->config('session', true);
auth()->config('messages.loginParamsError', 'Usuario o contraseña incorrecta');
auth()->config('messages.loginPasswordError', auth()->config('messages.loginParamsError'));
auth()->config('timestamps', false);
auth()->config('db.table', 'seguridad');

date_default_timezone_set($_ENV['TIMEZONE']);
Date::setLocale($_ENV['LOCALE']);

$container = new Container;
$container->singleton(PDO::class, static fn(): PDO => db()->connection());
$manager = new Manager;

$manager->addConnection([
  'driver' => $_ENV['DB_CONNECTION'],
  'host' => $_ENV['DB_HOST'] ?? '127.0.0.1',
  'database' => $_ENV['DB_DATABASE'],
  'username' => $_ENV['DB_USERNAME'] ?? 'root',
  'password' => $_ENV['DB_PASSWORD'] ?? ''
]);

$manager->setAsGlobal();
$manager->bootEloquent();
