<?php session_start();

include '../modelos/Db.php';

$modelo = new Connection();
/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */
$data = $modelo->table = "profesor";
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
              <h1 class="m-0">Listado de Profesores</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">

        <!-- Main content -->
        <div class="col-md-12 table-responsive">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">-</h3>
              <div class="card-tools">
                <a class="btn btn-info my-2" href="REGISTRO.PROF/profesor.php"><i class="fa fa-plus-square" aria-hidden="true"></i>  Registrar Profesores</a>
              </div>
            </div>


            <div class="card-boby ">
              <div style="text-align:center;">
                <table class="table table-bordered table-hover  ">
                  <thead>
                    <tr>
                      <th>Nº</th>
                      <th>Cédula</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Codigo de cargo del Prof</th>
                      <th>Codigo de Domina</th>
                      <th>Fecha_Increso_T_Ministerio</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Fecha de registro</th>
                      
                      <th>Editar</th>
                      <th>Eliminar</th>

                    </tr>

                  </thead>
                  <tbody>
                    <?php foreach ($data as $profesor): ?>
                      <tr>
                        <td><?= $profesor["Id_Prof"] ?></td>
                        <td><?= $profesor["Ced_Prof"] ?></td>
                        <td><?= $profesor["Nom_Prof"] ?></td>
                        <td><?= $profesor["Apell_Prof"] ?></td>
                        <td><?= $profesor["Fec_Nac"] ?></td>
                        <td><?= $profesor["Codigo_Carg_Prof"] ?></td>
                        <td><?= $profesor["Codigo_Domina"] ?></td>
                        <td><?= $profesor["Fec_Incres_T_Minis"] ?></td>
                        <td><?= $profesor["Email_Prof"] ?></td>
                        <td><?= $profesor["Telf_Prof"] ?></td>
                        <td><?= $profesor["Fec_Registro"] ?></td>

                        <td>
                          <a href="../Profesor/EDITAR.PROF/profesor.php?id=<?php echo $profesor["Id_Prof"] ?>" class="btn btn-primary">
                            Editar
                          </a>
                        </td>

                        <td>
                          <a href="../Profesor/ELIMINAR.PROF/eliminarProfesor.php?id=<?php echo $profesor["Id_Prof"] ?>" class="btn btn-danger">
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