<?php

session_start();
include '../modelos/Db.php';

$modelo = new Connection;
$modelo->table = 'estudiante';

/** @var array<int, array{
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
$data = $modelo->getAll();

?>

<!DOCTYPE html>
<html lang="es">
<?php include "../plantillas/head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include "../plantillas/navbar.php" ?>
    <?php include "../plantillas/sidebar.php" ?>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <br>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Listado de Estudiantes</h1>
            </div>

          </div>
        </div>
      </div>

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
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="text-nowrap">
                    <tr>
                      <th>ID</th>
                      <th>Cédula</th>
                      <th>Apellidos</th>
                      <th>Nombres</th>
                      <th>Fecha de Nacimiento</th>
                      <th>Lugar de Nacimiento</th>
                      <th>Nacionalidad</th>
                      <th>Dirección Exacta</th>
                      <th>Representante</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $estudiante): ?>
                      <tr>
                        <td><?= $estudiante['Id_Est'] ?></td>
                        <td><?= $estudiante['Ced_Est'] ?></td>
                        <td><?= $estudiante['Apell_Est'] ?></td>
                        <td><?= $estudiante['Nom_Est'] ?></td>
                        <td><?= $estudiante['Fec_Nac'] ?></td>
                        <td><?= $estudiante['Luga_Nac'] ?></td>
                        <td><?= $estudiante['Nacionalidad'] ?></td>
                        <td><?= $estudiante['Dir_Exac'] ?></td>
                        <td><?= $estudiante['Id_Repres'] ?></td>
                        <td class="btn-group">
                          <a
                            href="../?id=<?= $estudiante['Id_Est'] ?>"
                            class="btn btn-danger btn-sm">
                            <i class="fas fa-eye" aria-hidden="true"></i>
                          </a>
                          <a
                            href="../Estudiante/EDITAR.EST/estudiante.php?id=<?= $estudiante['Id_Est'] ?>"
                            class="btn btn-primary btn-sm">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                          </a>
                          <a
                            href="../Estudiante/ELIMINAR.EST/eliminarEstudiante.php?id=<?= $estudiante['Id_Est'] ?>"
                            class="btn btn-danger btn-sm">
                            <i class="fa fa-trash" aria-hidden="true"></i>
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
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <?php include "../plantillas/javascripts.php" ?>
</body>

</html>
