<?php

require_once '../../modelos/Db.php';

class ObtenerUsuario
{
  /**
   * @return array{
   *   Id_usuario: int,
   *   Cedula: int,
   *   Nombres: string,
   *   Apellidos: string,
   *   Usuario: string,
   *   Clave: string,
   *   Privilegio: string
   * }
   */
  function editarUsuario()
  {
    $id = $_GET['id'];
    $model = new Connection;
    $con = $model->conexion();
    $data = $con->query("SELECT * FROM usuario WHERE Id_usuario=$id");
    $data = $data->fetch(PDO::FETCH_ASSOC);

    return $data;
  }
}

$representante = new ObtenerUsuario;
$representante = $representante->editarUsuario();

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
          <form class=from action="editarUsuario.php" method="POST">
            <h1>Editar Usuario</h1>
            <div class="input-greop">
              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users"> Cedula:</i>
                <input class="field" name="Cedula" placeholder="" value="<?= $usuario['Cedula'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Apellidos:</i>
                <input class="field" name="Apell_Repres" placeholder="" value="<?= $representante['Apell_Repres'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Nombre:</i>
                <input class="field" name="Nom_Repres" placeholder="" value="<?= $representante['Nom_Repres'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Fecha de Nacimiento:</i>
                <input class="field" name="Fec_Nac" placeholder="" value="<?= $representante['Fec_Nac'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Lugar de Nacimiento:</i>
                <input class="field" name="Luga_Nac" placeholder="" value="<?= $representante['Luga_Nac'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Nacionalidad:</i>
                <input class="field" name="Nacionalidad" value="<?= $representante['Nacionalidad'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Dirección Exacta:</i>
                <input class="field" name="Dir_Exac" value="<?= $representante['Dir_Exac'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Afinidad con el Estudiante:</i>
                <input class="field" name="Afin_con_Est" value="<?= $representante['Afin_con_Est'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Email:</i>
                <input class="field" name="Email_Repres" value="<?= $representante['Email_Repres'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Telefono:</i>
                <input class="field" name="Telf_Repres" value="<?= $representante['Telf_Repres'] ?>" type="text" required> <br />
              </div>

              <p class="center-content">
                <input type="submit" class="btn btn-green" value="Actualizar">
              </p>

              <p> <a href="../usuario x.php?">Salir </a></p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
