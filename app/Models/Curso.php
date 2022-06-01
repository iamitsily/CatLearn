<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['id','id_user','nombre','subtitulo','descripcion','categoria','docente','participante','gusta','imagen','fecha_inicio','fecha_fin'];

    //Relación un curso es creado por un usuario
    public function user(){
        return $this->belongsTo(User::class,'id_creador');
    }
    //Relacion un curso tiene muchos usuarios
    public function usuario(){
        return $this->hasMany(User::class,'id');
    }
    //Muchos a muchos de lecciones
    public function leccion(){
        return $this->hasMany(Leccion::class,'id_curso');
    }
}
