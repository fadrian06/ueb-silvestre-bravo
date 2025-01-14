<?php

require_once '../../modelos/Db.php';

class ObtenerEstudiante
{
  /** @return array<int, array{
   *   Id_Est: int,
   *   Ced_Est: string,
   *   Apell_Est: string,
   *   Nom_Est: string,
   *   Fec_Nac: string,
   *   Luga_Nac: string,
   *   Nacionalidad: string,
   *   Dir_Exac: string,
   *   Id_Repres: int
   * }> */
  function editarEstudiante()
  {
    $id = $_GET['id'];
    $model = new Connection;
    $con = $model->conexion();
    $data = $con->query("SELECT * FROM estudiante WHERE Id_Est=$id");
    $data = $data->fetch(PDO::FETCH_ASSOC);

    return $data;
  }
}

$estudiante = new ObtenerEstudiante;
$estudiante = $estudiante->editarEstudiante();

?>

<!DOCTYPE html>
<html lang="es">
<?php include '../../plantillas/head.php' ?>

<body>

  <?php include '../../plantillas/navbar.php' ?>
  <?php include '../../plantillas/sidebar.php' ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
        <div class="form-content">
          <form class=from action="editarEstudiante.php" method="POST">
            <h1>Registro de Estudiantes</h1>
            <div class="input-greop">
              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users"> Cedula del Estudiante:</i>
                <input class="field" name="Ced_Est" placeholder="" value="<?= $estudiante['Ced_Est'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Apellidos:</i>
                <input class="field" name="Apell_Est" placeholder="" value="<?= $estudiante['Apell_Est'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Nombres:</i>
                <input class="field" name="Nom_Est" placeholder="" value="<?= $estudiante['Nom_Est'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Fecha de Nacimiento:</i>
                <input class="field" name="Fec_Nac" placeholder="" value="<?= $estudiante['Fec_Nac'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Lugar de Nacimiento:</i>
                <input class="field" name="Luga_Nac" placeholder="" value="<?= $estudiante['Luga_Nac'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Nacionalidad:</i>
                <input class="field" name="Nacionalidad" value="<?= $estudiante['Nacionalidad'] ?>" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fas fa-users">Direccion Exacta:</i>
                <input class="field" name="Dir_Exac" value="<?= $estudiante['Dir_Exac'] ?>" type="text" required> <br />
              </div>

              <div id="representante_estudiante"></div>
              <input class="field" type="hidden" name="Id_Est" value="<?= $estudiante['Id_Est'] ?>" type="text"> <br />

              <p class="center-content">
                <input type="submit" class="btn btn-green" value="Actualizar">
              </p>
              <p> <a href="../estudiantes x.php">Cancelar </a></p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <script>
    const representante = document.getElementById('representante_estudiante');
    obtener_select();

    function obtener_select() {
      fetch('./representante_estudiante.php?id=<?= $estudiante['Id_Repres'] ?>')
        .then((response) => response.text())
        .then((response) => representante.innerHTML = response)
    }
  </script>

</body>

</html>
