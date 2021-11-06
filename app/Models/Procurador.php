<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurador extends Model
{
    use HasFactory;
    protected $guarded=['created_at, updated_at'];

    //relación de herencia
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
//Relacion de uno a muchos
    public function documentoJudicials(){
        return $this->hasMany(DocumentoJudicial::class);
    }
// Relacion de uno a muchos
    public function actividads(){
        return $this->hasMany(Actividad::class);
    }
// Relacion inversa de uno a muchos
    public function abogado(){
        return $this->belongsTo(Abogado::class);
    }
}
