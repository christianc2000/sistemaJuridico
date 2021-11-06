<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcesoJudicial extends Model
{
    use HasFactory;
    protected $guarded=['id', 'created_at, updated_at'];

//relación de uno a muchos
    public function documentoJudicials(){
        return $this->hasMany(DocumentoJudicial::class);
    }
//relacion inversa de uno a muchos
    public function juzgado(){
        return $this->belongsTo(Juzgado::class);
    }
}
