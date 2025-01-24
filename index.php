<?php

use Illuminate\Database\Capsule\Manager;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

(new Dotenv)->load(__DIR__ . '/.env');
auth()->config('session', true);
auth()->config('messages.loginParamsError', 'Cédula o contraseña incorrecta');
auth()->config('messages.loginPasswordError', auth()->config('messages.loginParamsError'));
auth()->config('timestamps', false);

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

require_once __DIR__ . '/rutas.php';
app()->run();
