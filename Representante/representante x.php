<?php

session_start();
require_once '../modelos/Db.php';

$modelo = new Connection;
$data = $modelo->table = 'representante';

/** @var array<int, array{
 *   Id_Repres: int,
 *   Ced_Repres: int,
 *   Apell_Repres: string,
 *   Nom_Repres: string,
 *   Fec_Nac: string,
 *   Luga_Nac: string,
 *   Nacionalidad: string,
 *   Dir_Exac: string,
 *   Afin_con_Est: string,
 *   Email_Repres: string,
 *   Telf_Repres: int
 * }> */
$data = $modelo->getAll();

?>

<!DOCTYPE html>
<html lang="es">
<?php include '../plantillas/head.php' ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include '../plantillas/navbar.php' ?>
    <?php include '../plantillas/sidebar.php' ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Listado de Representantes</h1>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <!-- Main content -->
        <div class="col-md-12 table-responsive">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">.</h3>
              <div class="card-tools">
                <a class="btn btn-info my-2" href="./REGISTRO.REPRES/representante.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Registrar Representante</a>
              </div>
            </div>

            <div class="card-boby ">
              <div style="text-align:center;">
                <table class="table table-bordered table-hover  ">
                  <thead>
                    <tr>
                      <th>ID</th>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $representante): ?>
                      <tr>
                        <td><?= $representante["Id_Repres"] ?></td>
                        <td><?= $representante['Ced_Repres'] ?></td>
                        <td><?= $representante['Apell_Repres'] ?></td>
                        <td><?= $representante['Nom_Repres'] ?></td>
                        <td><?= $representante['Fec_Nac'] ?></td>
                        <td><?= $representante['Luga_Nac'] ?></td>
                        <td><?= $representante['Nacionalidad'] ?></td>
                        <td><?= $representante['Dir_Exac'] ?></td>
                        <td><?= $representante['Afin_con_Est'] ?></td>
                        <td><?= $representante['Email_Repres'] ?></td>
                        <td><?= $representante['Telf_Repres'] ?></td>

                        <td class="btn-group">
                          <a
                            href="../Representante/EDITAR.REPRES/representante.php?id=<?= $representante['Id_Repres'] ?>"
                            class="btn btn-primary">
                            Editar
                          </a>
                          <a
                            href="../Representante/ELIMINAR.REPRES/eliminarRepresentante.php?id=<?= $representante['Id_Repres'] ?>"
                            class="btn btn-danger">
                            Eliminar
                          </a>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>

  <?php include "../plantillas/javascripts.php" ?>
</body>

</html>
