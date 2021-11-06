<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $guarded=['id', 'created_at, updated_at'];
    //relacion de herencia
    public function abogado(){
        return $this->hasOne(Abogado::class);
    }
    //relacion de herencia
    public function procurador(){
        return $this->hasOne(Procurador::class);
    }
    //relación de 1 a 0..1
    public function user(){
        return $this->hasOne(User::class);
    }
    //relacion de 1 a muchos a traves de
    public function expedientes(){
        return $this->hasManyThrough(Expediente::class,Abogado::class);
    }
    //relacion de 1 a muchos a traves de
    public function actividads(){
        return $this->hasManyThrough(Actividad::class,Procurador::class);
    }
    //relacion de 1 a muchos a traves de
    public function documentoJudicials(){
        return $this->hasManyThrough(DocumentoJudicial::class,Procurador::class);
    }

}
