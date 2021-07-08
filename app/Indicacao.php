<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicacao extends Model
{
    protected $table='indicacao';
    public $timestamps = false;
    protected $fillable = ['nome','cpf','telefone','email','status_id'];

    public function status_indicacao()
    {
        return $this->belongsTo(Status_indicacao::class);
    }
}


