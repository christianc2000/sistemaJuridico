<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoJudicial extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded=['id', 'created_at, updated_at'];

    //relacion inversa de uno a muchos
    public function procurador(){
        return $this->belongsTo(Procurador::class);
    }
    //relación inversa de uno a muchos
    public function procesoJudicial(){
        return $this->belongsTo(ProcesoJudicial::class);
    }
    //relacion inversa de uno a muchos
    public function expediente(){
        return $this->belongsTo(Expediente::class);
    }
    //relación uno a muchos polimorfica
    public function documentos(){
        return $this->morphMany(Documento::class, 'documenteable');
    }
}
