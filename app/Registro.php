<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'usuarios';
    public $timestamps=false;
    //protected $fillable = ['usuario','contrasena'];
    protected $fillable = ['pregunta1','pregunta2','pregunta3','pregunta4','pregunta5'];
}
