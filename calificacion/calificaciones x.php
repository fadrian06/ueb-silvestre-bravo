<?php session_start();

include 'modelos/Db.php';

$modelo = new Connection();
/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */
$data = $modelo->getAll();


?>

<!DOCTYPE html>
<html lang="es">
<?php include "plantillas/head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->

    <!-- Navbar -->
    <?php include "plantillas/navbar.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include "plantillas/sidebar.php" ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Calificaciones</h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">


        <a class="btn btn-info my-2" href="REGISTRAR/usuario.php"> registro</a>



        <div class="col-12 table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
             
                <th>Editar</th>
                <th>Eliminar</th>
                
              </tr>

            </thead>
            <tbody>
              <?php foreach ($data as $usuario): ?>
                <tr>

                  <td><?= $usuario["Id_usuario"] ?></td>
               
                  <td>
                  <a href="notas_estudientes.php?id=<?php echo $seguridad ["id"]?>" class="btn btn-primary">
                    Editar
                    </a>
                  </td>

                  <td>
                  <a href="notas_estudientes.php?id=<?php echo $seguridad ["id"]?>" class="btn btn-danger">
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
  <?php include "plantillas/javascripts.php" ?>

</body>

</html>