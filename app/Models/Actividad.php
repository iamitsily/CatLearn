<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

     //Muchos a uno leccion
     public function leccion(){
        return $this->belongsTo(Leccion::class);
    }
}
