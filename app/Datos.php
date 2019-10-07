<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table = 'Datos_usuarios';
    public $timestamps = false;
    protected $fillable = ['pregunta1','pregunta2','pregunta3','pregunta4','pregunta5'];
}
