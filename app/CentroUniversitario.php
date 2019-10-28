<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroUniversitario extends Model
{
    protected $table = 'centros_universitarios';
    public $timestamps = false;
    protected $fillable = ['centro'];
}
