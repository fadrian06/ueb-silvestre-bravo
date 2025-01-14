<?php
include '../../modelos/Db.php';
/*
$modelo = new Connection();
$usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] 
$data = $modelo->getAll();
print_r($data);
*/

?>
<!DOCTYPE html>
<html lang="es">
<?php include '../../plantillas/head.php' ?>

<body>

    <?php include '../../plantillas/navbar.php' ?>
    <?php include "../../plantillas/sidebar.php" ?>

    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="form-content">


                    <form class=from action="registroProfesor.php" method="POST">

                        <h1>Registro de Profesores</h1>
                        <div class="input-greop">

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users"> Cedula:</i>
                                <input class="field" name="Ced_Prof" placeholder="" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Nombres:</i>
                                <input class="field" name="Nom_Prof" placeholder="" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Apellidos:</i>
                                <input class="field" name="Apell_Prof" placeholder="" value="" type="text" required> <br />
                            </div>


                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Fecha de Nacimiento:</i>
                                <input class="field" name="Fec_Nac" placeholder="" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Codigo de cargo del Prof:</i>
                                <input class="field" name="Codigo_Carg_Prof" placeholder="" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Codigo de Domina:</i>
                                <input class="field" name="Codigo_Domina" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Fecha_Increso_T_Ministerio:</i>
                                <input class="field" name="Fec_Incres_T_Minis" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Email:</i>
                                <input class="field" name="Email_Prof" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Telefono:</i>
                                <input class="field" name="Telf_Prof" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Fecha de registro:</i>
                                <input class="field" name="Fec_Registro" value="" type="text" required> <br />
                            </div>


                            <p class="center-content">
                                <input type="submit" class="btn btn-green" value="Registrar">
                            </p>
                            <p> <a href="../profesor x.php">Salir </a></p>


                        </div>



                    </form>


                </div>


            </div>

        </section>
    </div>



</body>

</html>