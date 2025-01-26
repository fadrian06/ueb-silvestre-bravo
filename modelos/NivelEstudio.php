<?php

namespace SABL\Modelos;

use Illuminate\Database\Eloquent\Model;

final class NivelEstudio extends Model
{
  protected $table = 'nivel_estudio';
  protected $primaryKey = 'Id_Nivel_estud';
  public $timestamps = false;

  protected $fillable = ['Nom_Nivel_estd'];

  function __toString(): string
  {
    return $this->Nom_Nivel_estd;
  }
}
