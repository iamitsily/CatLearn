<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_user','nombre','subtitulo','descripcion','categoria','docente','participante','gusta','imagen','fecha_inicio','fecha_fin'];

    //Muchos a uno
    public function user(){
        return $this->hasMany(User::class);
    }
    //Muchos a muchos de lecciones
    public function leccion(){
        return $this->hasMany(Leccion::class);
    }
}
