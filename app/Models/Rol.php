<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    //relación de muchos a muchos
    public function privilegios(){
        return $this->belongsToMany(Privilegio::class);
    }
}
