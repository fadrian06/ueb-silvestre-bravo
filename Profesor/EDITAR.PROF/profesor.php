<?php

include '../../modelos/Db.php';

    class ObtenerProfesor{
        function editarProfesor(){
            $id= $_GET['id'];
            $model = new Connection();
            $con = $model->conexion();
            $data = $con->query("SELECT * FROM profesor WHERE Id_Prof=$id");
            $data = $data->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
    }
    $profesor = new ObtenerProfesor();
    $profesor = $profesor->editarProfesor();
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
            
            
                        <form class=from action="editarProfesor.php" method="POST">
            
                            <h1>Editar de Profesor</h1>
                            <div class="input-greop">
            
            
                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users"> Cedula:</i>
                                    <input class="field" name="Ced_Prof" placeholder="" value="<?= $profesor['Ced_Prof'] ?>" type="text" required> <br />
                                </div>

                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Nombres:</i>
                                    <input class="field" name="Nom_Prof" placeholder="" value="<?= $profesor['Nom_Prof'] ?>" type="text" required> <br />
                                </div>

                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Apellidos:</i>
                                    <input class="field" name="Apell_Prof" placeholder="" value="<?= $profesor['Apell_Prof'] ?>" type="text" required> <br />
                                </div>
            
                                
            
                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Fecha de Nacimiento:</i>
                                    <input class="field" name="Fec_Nac" placeholder="" value="<?= $profesor['Fec_Nac'] ?>" type="text" required> <br />
                                </div>
            
                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Codigo de cargo del Prof:</i>
                                    <input class="field" name="Codigo_Carg_Prof" placeholder="" value="<?= $profesor['Codigo_Carg_Prof'] ?>" type="text" required> <br />
                                </div>
            
                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Codigo de Domina:</i>
                                    <input class="field" name="Codigo_Domina" value="<?= $profesor['Codigo_Domina'] ?>" type="text" required> <br />
                                </div>
            
                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Fecha_Increso_T_Ministerio:</i>
                                    <input class="field" name="Fec_Incres_T_Minis" value="<?= $profesor['Fec_Incres_T_Minis'] ?>" type="text" required> <br />
                                </div>

                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Email:</i>
                                    <input class="field" name="Email_Prof" value="<?= $profesor['Email_Prof'] ?>" type="text" required> <br />
                                </div>

                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Telefono:</i>
                                    <input class="field" name="Telf_Prof" value="<?= $profesor['Telf_Prof'] ?>" type="text" required> <br />
                                </div>

                                <div class="input-field" id="nameInput">
                                    <i class="nav-icon fas fa-users">Fecha de registro:</i>
                                    <input class="field" name="Fec_Registro" value="<?= $profesor['Fec_Registro'] ?>" type="text" required> <br />
                                </div>

                                
            
            
                                <p class="center-content">
                                    <input type="submit" class="btn btn-green" value="Actualizar">
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