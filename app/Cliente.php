<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre', 'correo', 'codigo', 'fecha_nacimiento'];
    protected $dates = ['fecha_nacimiento', 'created_at', 'updated_at'];
    
    public function centroUniversitario()
    {
        return $this->belongsTo(CentroUniversitario::class, 'centro_universitario_id');
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class);
    }
}
