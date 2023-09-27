<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    public function consulta(){
        return $this->belongsToMany('App\Models\Consulta');
    }

    public function relacioncms(){
        return $this->hasMany('App\Models\Relacioncm');
    }
}
