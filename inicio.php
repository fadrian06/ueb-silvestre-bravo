<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">
<?php include "plantillas/head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include "plantillas/navbar.php" ?>
    <?php include "plantillas/sidebar.php" ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Panel de Administracion</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <h2></h2>
        <img src="imagenes/logo.png" alt="Imagen">
        <h1></h1>
      </section>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>
  <?php include "plantillas/javascripts.php" ?>
</body>

</html>
