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


                    <form class=from action="registroRepresentante.php" method="POST">

                        <h1>Registro de Representante</h1>
                        <div class="input-greop">
                            

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users"> Cedula:</i>
                                <input class="field" name="Ced_Repres" placeholder="Ced_Repres" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Apellidos:</i>
                                <input class="field" name="Apell_Repres" placeholder="Apell_Repres" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Nombres:</i>
                                <input class="field" name="Nom_Repres" placeholder="Nom_Repres" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Fecha de Nacimiento:</i>
                                <input class="field" name="Fec_Nac" placeholder="Fec_Nac" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Lugar de Nacimiento:</i>
                                <input class="field" name="Luga_Nac" placeholder="Luga_Nac" value="" type="text" required> <br />
                            </div>

                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Nacionalidad:</i>
                                <input class="field" name="Nacionalidad" placeholder="Nacionalidad" value="" type="text" required> <br />
                            </div>
                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Direccion Exacta:</i>
                                <input class="field" name="Dir_Exac" placeholder="Dir_Exac" value="" type="text" required> <br />
                            </div>
                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Afinidad con el Estudiante:</i>
                                <input class="field" name="Afin_con_Est" placeholder="Afin_con_Est" value="" type="text" required> <br />
                            </div>
                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Email:</i>
                                <input class="field" name="Email_Repres" placeholder="Email_Repres" value="" type="text" required> <br />
                            </div>
                            <div class="input-field" id="nameInput">
                                <i class="nav-icon fas fa-users">Telefono:</i>
                                <input class="field" name="Telf_Repres" placeholder="Telf_Repres" value="" type="text" required> <br />
                            </div>



                            <p class="center-content">
                                <input type="submit" class="btn btn-green" value="Registrar">
                            </p>

                            <p> <a href="../usuario x.php">Salir </a></p>

                        </div>



                    </form>


                </div>


            </div>

        </section>
    </div>





</body>

</html>
