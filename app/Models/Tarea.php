<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //Muchos a uno leccion
    public function leccion(){
        return $this->belongsTo(Leccion::class);
    }
}
