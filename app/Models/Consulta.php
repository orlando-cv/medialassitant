<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    
    
    public function medicamentos(){
        return $this->belongsToMany('App\Models\Medicamento');
    }

    public function relacioncms(){
        return $this->hasMany('App\Models\Relacioncm');
    }
}
