<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_indicacao extends Model
{
  protected $table='status_indicacao';
  public $timestamps = false;


  public function indicacaos()
  {
      return $this->hasMany(Indicacao::class);
  }
}
