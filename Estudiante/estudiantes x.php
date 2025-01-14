<?php session_start();

include '../modelos/Db.php';

$modelo = new Connection();

/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */
$data = $modelo->table = "estudiante";
$data = $modelo->getAll();


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
      <br>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Listado de Estudiantes</h1>
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
              <h3 class="card-title">Registra los Estudiantes con sus datos especificos.</h3>
              <div class="card-tools">
                <a class="btn btn-info my-2" href="./REGISTRO.EST/estudiante.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Registrar Estudiante</a>
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
                      <th>Representante</th>
                      <th>Vista</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>

                  </thead>
                  <tbody>
                    <?php foreach ($data as $estudiante): ?>
                      <tr>
                        <td><?= $estudiante["Id_Est"] ?></td>
                        <td><?= $estudiante["Ced_Est"] ?></td>
                        <td><?= $estudiante["Apell_Est"] ?></td>
                        <td><?= $estudiante["Nom_Est"] ?></td>
                        <td><?= $estudiante["Fec_Nac"] ?></td>
                        <td><?= $estudiante["Luga_Nac"] ?></td>
                        <td><?= $estudiante["Nacionalidad"] ?></td>
                        <td><?= $estudiante["Dir_Exac"] ?></td>
                        <td><?= $estudiante["Id_Repres"] ?></td>

                        <td>
                          <a href="../?id=<?php echo $estudiante["Id_Est"] ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-eye" aria-hidden="true"></i></a>
                        </td>

                        <td>
                          <a href="../Estudiante/EDITAR.EST/estudiante.php?id=<?php echo $estudiante["Id_Est"] ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        </td>

                        <td>
                          <a href="../Estudiante/ELIMINAR.EST/eliminarEstudiante.php?id=<?php echo $estudiante["Id_Est"] ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>

                      </tr>
                    <?php endforeach ?>
                  </tbody>

              </div>
            </div>
          </div>

      </section>
      <!-- /.content -->
    </div>

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