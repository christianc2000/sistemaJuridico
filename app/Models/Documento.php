<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable=['url', 'documenteable_id', 'documenteable_type'];

    public function documenteable(){
        return $this->morphTo();
    }
}
