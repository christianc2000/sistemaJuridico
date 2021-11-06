<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded=['id', 'created_at, updated_at'];

    //relacion de 1 a muchos
    public function documentoJudicials(){
        return $this->hasMany(Expediente::class);
    }
    //relacion inversa de 1 a muchos
    public function abogado(){
        return $this->belongsTo(Abogado::class);
    }
    //relacion inversa atraves de
    public function persona(){
        return $this->belongsTo(Persona::class,Abogado::class);
    }
}
