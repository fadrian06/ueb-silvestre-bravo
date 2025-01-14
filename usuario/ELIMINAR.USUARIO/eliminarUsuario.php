<?php

use SABL\Modelos\Usuario;

require_once __DIR__ . "/../../vendor/autoload.php";

Usuario::eliminarPorId($_GET['id']);

echo '<script>alert (" Usuario eliminado con Exito ");</script>';
echo '<script>document.location.href="../../usuario x.php" </script>';
