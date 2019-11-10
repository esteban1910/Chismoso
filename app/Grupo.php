<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nombre_grupo'];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }
}
