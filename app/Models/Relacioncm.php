<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacioncm extends Model
{
    use HasFactory;

    public function consulta(){
        return $this->belongsTo('App\Models\Consulta');
    }
    
    public function medicamento(){
        return $this->belongsTo('App\Models\Medicamento');
    }
}

