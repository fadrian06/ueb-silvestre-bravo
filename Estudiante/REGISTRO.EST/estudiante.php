<?php require_once '../../modelos/Db.php' ?>

<!DOCTYPE html>
<html lang="es">
<?php include '../../plantillas/head.php' ?>

<body>
  <style>
    .container {
      max-width: 700px;
      width: 100%;
      padding: 25px 30px;
      background-color: #ffff;
      border-radius: 5px;

      height: 100vh;
      align-items: center;
      justify-content: center;
      border: solid rgb(0, 0, 0);
    }
  </style>

  <?php include '../../plantillas/navbar.php' ?>
  <?php include '../../plantillas/sidebar.php' ?>

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
        <div class="form-content">
          <form class=from action="registroEstudiante.php" method="POST">
            <h1>Registro de Estudiantes</h1>
            <div class="input-greop">
              <div class="input-field" id="nameInput">
                <i class="fa fa-id-card"></i>
                <input class="field" name="Ced_Est" placeholder="Cedula del Estudiante:" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="fa fa-user"></i>
                <input class="field" name="Apell_Est" placeholder="Apellidos:" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="fa fa-user"></i>
                <input class="field" name="Nom_Est" placeholder="Nombres:" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="fa fa-calendar"></i>
                <input class="field" name="Fec_Nac" placeholder="Fecha de Nacimiento:" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="fas fa-map-marker-alt"></i>
                <input class="field" name="Luga_Nac" placeholder="Lugar de Nacimiento:" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fa fa-flag">Nacionalidad:</i>
                <input class="field" name="Nacionalidad" value="" type="text" required> <br />
              </div>

              <div class="input-field" id="nameInput">
                <i class="nav-icon fa fa-map-marker">Direccion Exacta:</i>
                <input class="field" name="Dir_Exac" value="" type="text" required> <br />
              </div>

              <div id="representante_estudiante"></div>

              <p class="center-content">
                <input type="submit" class="btn btn-info" value="Registrar">
              </p>

              <p class="center-content">
                <a href="../estudiantes x.php?" class="btn btn-info">Cancelar </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

  <script>
    const representante = document.getElementById("representante_estudiante");
    obtener_select();

    function obtener_select() {
      fetch('./representante_estudiante.php')
        .then((response) => response.text())
        .then((response) => representante.innerHTML = response)
    }
  </script>

</body>

</html>
