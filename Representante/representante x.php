<?php session_start();

include '../modelos/Db.php';

$modelo = new Connection();
/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */
$data = $modelo->table = "representante";
$data = $modelo->getAll();

/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */


?>

<!DOCTYPE html>
<html lang="es">
<?php include "../plantillas/head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->

    <!-- Navbar -->
    <?php include "../plantillas/navbar.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include "../plantillas/sidebar.php" ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Listado de Representantes</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


      <section class="content">

        <!-- Main content -->
        <div class="col-md-12 table-responsive">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">.</h3>
              <div class="card-tools">
                <a class="btn btn-info my-2" href="./REGISTRO.REPRES/representante.php"><i class="fa fa-plus-square" aria-hidden="true"></i>  Registrar Representante</a>
              </div>
            </div>


            <div class="card-boby ">
              <div style="text-align:center;">
                <table class="table table-bordered table-hover  ">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Cédula</th>
                      <th>Apellidos</th>
                      <th>Nombres</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Lugar de Nacimiento</th>
                      <th>Nacionalidad</th>
                      <th>Dirección Exacta</th>
                      <th>Afinidad con el estudiante</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Editar</th>
                      <th>Eliminar</th>

                    </tr>

                  </thead>
                  <tbody>
                    <?php foreach ($data as $representante): ?>
                      <tr>

                        <td><?= $representante["Id_Repres"] ?></td>
                        <td><?= $representante["Ced_Repres"] ?></td>
                        <td><?= $representante["Apell_Repres"] ?></td>
                        <td><?= $representante["Nom_Repres"] ?></td>
                        <td><?= $representante["Fec_Nac"] ?></td>
                        <td><?= $representante["Luga_Nac"] ?></td>
                        <td><?= $representante["Nacionalidad"] ?></td>
                        <td><?= $representante["Dir_Exac"] ?></td>
                        <td><?= $representante["Afin_con_Est"] ?></td>
                        <td><?= $representante["Email_Repres"] ?></td>
                        <td><?= $representante["Telf_Repres"] ?></td>

                        <td>
                          <a href="../Representante/EDITAR.REPRES/representante.php?id=<?php echo $representante["Id_Repres"] ?>" class="btn btn-primary">
                            Editar
                          </a>
                        </td>

                        <td>
                          <a href="../Representante/ELIMINAR.REPRES/eliminarRepresentante.php?id=<?php echo $representante["Id_Repres"] ?>" class="btn btn-danger">
                            Eliminar
                          </a>
                        </td>



                      </tr>
                    <?php endforeach ?>
                  </tbody>



      </section>
      <!-- /.content -->
    </div>

    <!-- Content Wrapper. Contains page content -->

    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include "../plantillas/javascripts.php" ?>



</body>

</html>