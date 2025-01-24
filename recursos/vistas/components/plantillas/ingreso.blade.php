<!doctype html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Sistema Automatizado</title>
    <base href="{{ str_replace('index.php', '', $_SERVER['SCRIPT_NAME']) }}" />
    <link rel="stylesheet" href="./dist/ingreso.css" />
  </head>

  <body>
    {{ $slot }}
    <script src="./dist/ingreso.js"></script>
  </body>

</html>
