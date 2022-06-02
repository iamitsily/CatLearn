<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    use HasFactory;

    //Uno a muchos curso
    public function curso(){
        return $this->belongsTo(Curso::class);
    }
    //Uno a muchos tareas
    public function tarea(){
        return $this->hasMany(Tarea::class,'id_leccion');
    }
    //Uno a muchos examen
    public function examen(){
        return $this->hasMany(Examen::class,'id_leccion');
    }
    //Uno a muchos actividad
    public function actividad(){
        return $this->hasMany(Actividad::class,'id_leccion') ;
    }
}
