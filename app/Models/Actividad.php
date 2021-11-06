<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded=['id', 'created_at, updated_at'];

//relación inversa de uno a muchos
    public function procurador(){
        return $this->belongsTo(Procurador::class);
    }
    //relacion inversa de uno a muchos
    public function abogado(){
        return $this->belongsTo(Abogado::class);
    }
}
