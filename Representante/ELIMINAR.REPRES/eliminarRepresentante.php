<?php

include "../../modelos/Db.php";

class representanteEliminar
{
    public function eliminarRepresentante()
    {
        $c = new Connection();
        $conexion = $c->conexion();

        //$fecha=date('Y-m-d');
        $id = $_GET["id"];



        $sql = "DELETE FROM representante where Id_Repres=$id";
        $conexion->query($sql);
    }
}

$representante = new representanteEliminar();
$representante->eliminarRepresentante();

echo '<script>alert (" Representante eliminado con Exito ");</script>';
echo '<script>document.location.href="../../representante x.php" </script>'; 