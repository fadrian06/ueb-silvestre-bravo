<?php

require_once '../../modelos/Db.php';

class RepresentanteEstudiante
{
  /** @return array<int, array{
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
  function obtener_reprensentante()
  {
    $modelo = new Connection;
    $modelo->table = 'representante';
    $data = $modelo->getAll();

    return $data;
  }
}

$data = new RepresentanteEstudiante();
$data = $data->obtener_reprensentante();

?>

<div class="input-field" id="nameInput">
  <i class="nav-icon fas fa-female">Representante:</i>
  <select name="Id_Repres">
    <?php foreach ($data as $representante): ?>
      <option value="<?= $representante['Id_Repres'] ?>">
        <?= $representante['Ced_Repres'] . ' ' .  $representante['Nom_Repres'] . ' ' . $representante['Apell_Repres'] ?>
      </option>
    <?php endforeach ?>
  </select>
</div>
