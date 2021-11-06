<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    use HasFactory;
    protected $guarded=['created_at, updated_at'];

    //relación de herencia
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
    //relación de 1 a muchos
    public function expedientes(){
        return $this->hasMany(Expediente::class);
    }
    //relación de 1 a muchos
    public function actividads(){
        return $this->hasMany(Actividad::class);
    }
    //relación de 1 a muchos
    public function procuradors(){
        return $this->hasMany(Procurador::class);
    }
}
