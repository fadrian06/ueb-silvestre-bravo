<?php

include "../../modelos/Db.php";

class profesorEliminar
{
    public function eliminarProfesor()
    {
        $c = new Connection();
        $conexion = $c->conexion();

        //$fecha=date('Y-m-d');
        $id = $_GET["id"];



        $sql = "DELETE FROM profesor where Id_Prof=$id";
        $conexion->query($sql);
    }
}

$profesor = new profesorEliminar();
$profesor->eliminarProfesor();

echo '<script>alert (" Profesor eliminado con Exito ");</script>';
echo '<script>document.location.href="../../profesor x.php" </script>'; 