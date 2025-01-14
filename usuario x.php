<?php

use SABL\Modelos\Usuario;

session_start();
require_once __DIR__ . '/vendor/autoload.php';

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
            </div>
          </div>
        </div>
      </div>

      <section class="content">

        <!-- Main content -->
        <div class="col-md-12 table-responsive">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">"Este módulo permite a el administrador crear cuentas de acceso."</h3>

              <div class="card-tools">
                <a class="btn btn-info my-2" href="REGISTRAR/usuario.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Registro de Usuarios</a>
              </div>
            </div>


            <div class="card-boby ">
              <div class="table-responsive">
                <table class="table table-bordered table-hover  ">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Cédula</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Usuario</th>
                      <th>Privilegio</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach (Usuario::todos() as $usuario): ?>
                      <tr>
                        <td><?= $usuario['Id_usuario'] ?></td>
                        <td><?= $usuario['Cedula'] ?></td>
                        <td><?= $usuario['Nombres'] ?></td>
                        <td><?= $usuario['Apellidos'] ?></td>
                        <td><?= $usuario['Usuario'] ?></td>
                        <td><?= $usuario['Privilegio'] ?></td>

                        <td class="btn-group">
                          <a
                            href="../usuario/EDITAR.USUARIO/usuario.php?id=<?= $usuario['Id_usuario'] ?>"
                            class="btn btn-primary">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                          </a>
                          <a
                            href="../usuario/ELIMINAR.USUARIO/eliminarUsuario.php?id=<?= $usuario['Id_usuario'] ?>"
                            class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php include "plantillas/javascripts.php" ?>

</body>

</html>
