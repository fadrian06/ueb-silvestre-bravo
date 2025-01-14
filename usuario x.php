<?php session_start();

include 'modelos/Db.php';

$modelo = new Connection();
/* $usuario = [
    "Cédula"=> "30680625",
    "Nombres"=> "Chiki",
] */

$modelo->table = 'seguridad';
$data = $modelo->getAll();


?>

<!DOCTYPE html>
<html lang="es">
<?php include "plantillas/head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <?php include "plantillas/navbar.php" ?>
    <?php include "plantillas/sidebar.php" ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Listado de Usuarios</h1>
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
              <h3 class="card-title">"Este módulo permite a el administrador crear cuentas de acceso."</h3>

              <div class="card-tools">
                <a class="btn btn-info my-2" href="REGISTRAR/usuario.php"><i class="fa fa-plus-square" aria-hidden="true"></i>  Registro de Usuarios</a>
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
                      <th>Usuario</th>
                      <th>Privilegio</th>
                      <th>Editar</th>
                      <th>Eliminar</th>

                    </tr>

                  </thead>
                  <tbody>

                    <?php foreach ($data as $usuario): ?>
                      <tr>

                        <td><?= $usuario["Id_usuario"] ?></td>
                        <td><?= $usuario["Cedula"] ?></td>
                        <td><?= $usuario["Nombres"] ?></td>
                        <td><?= $usuario["Apellidos"] ?></td>
                        <td><?= $usuario["Usuario"] ?></td>
                        <td><?= $usuario["Privilegio"] ?></td>

                        <td>
                          <a href="../usuario/EDITAR.USUARIO/usuario.php?id=<?php echo $seguridad["Id_usuario"] ?>" class="btn btn-primary">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                        </td>

                        <td>
                          <a href="../usuario/ELIMINAR.USUARIO/eliminarUsuario.php?id=<?php echo $seguridad["Id_usuario"] ?>" class="btn btn-danger btn-sm">
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
  <?php include "plantillas/javascripts.php" ?>

</body>

</html>