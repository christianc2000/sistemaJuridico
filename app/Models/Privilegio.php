<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    use HasFactory;
    protected $fillable=['detail'];

    //relación de muchos a muchos
    public function rols(){
        return $this->belongsToMany(Rol::class);
    }
}
