<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

     //Muchos a uno leccion
     public function leccion(){
        return $this->belongsTo(Leccion::class);
    }

    //Uno a muchos preguntas**
    public function pregunta(){
        return $this->belongsTo(Pregunta::class);
    }
}
