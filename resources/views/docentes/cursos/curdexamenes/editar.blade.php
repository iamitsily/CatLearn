@extends('usuarios.plantilla')
@section('title', 'Lecciones')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Editar Examen</h2>
        <p>En esta seccion puedes editar los examenes de tu leccion</p>
    </div>
</div>
<br><br>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('examen.update',$examen->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Exammen | {{$examen->titulo}}</label>
                <input id="id_user" name="id_leccion" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$examen->id_leccion}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$examen->titulo}}">
            </div>
            <div class="mb-3">
                <input id="subtitulo" style="display: none;" name="realizada" type="text" class="form-control" tabindex="1" value="{{$examen->realizada}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Inicio</label>
                <input id="subtitulo" name="fecha_inicio" type="date" class="form-control" tabindex="1" value="{{$examen->fecha_inicio}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="subtitulo" name="fecha_fin" type="date" class="form-control" tabindex="1" value="{{$examen->fecha_fin}}">
            </div>
            <div class="mb-3">
                <input id="subtitulo" style="display: none;" name="calificacion" type="text" class="form-control" tabindex="1" value="{{$examen->calificacion}}">
            </div>
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection