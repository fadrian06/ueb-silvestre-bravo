<?php

namespace SABL\Modelos;

use Illuminate\Database\Eloquent\Model;

final class Representante extends Model
{
  protected $table = 'representante';
  protected $primaryKey = 'Id_Repres';
  public $timestamps = false;

  function __toString(): string
  {
    return mb_convert_case(
      "$this->Nom_Repres $this->Apell_Repres",
      MB_CASE_TITLE
    );
  }
}
