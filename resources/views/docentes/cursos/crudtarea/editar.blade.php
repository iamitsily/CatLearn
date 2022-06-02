@extends('usuarios.plantilla')
@section('title', 'Tarea')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Tarea</h2>
        <p>En esta seccion puedes modificar la tarea <b>{{$tarea->titulo}}</b></p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Volver a Tareas</a>
            <a class="nav-link bg-success disabled text-white" href="">Editar Tarea</a>
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('tarea.update',$tarea->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Tarea | {{$tarea->titulo}}</label>
                <input id="id_user" name="id_leccion" style="display: none;" type="text" class="form-control" tabindex="1" value="{{$tarea->id_leccio}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input id="nombre" name="titulo" type="text" class="form-control" tabindex="1" value="{{$tarea->titulo}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="nombre" name="descripcion" type="text" class="form-control" tabindex="1" value="{{$tarea->descripcion}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Entrega</label>
                <input id="subtitulo" name="fecha_inicio" type="date" class="form-control" tabindex="1" value="{{$tarea->fecha_inicio}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="subtitulo" name="fecha_fin" type="date" class="form-control" tabindex="1" value="{{$tarea->fecha_fin}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Documento</label>
                <input id="subtitulo" name="documento" type="text" class="form-control" tabindex="1" value="{{$tarea->documento}}">
            </div>
            <input id="subtitulo" style="display: none;" name="calificacion" type="text" class="form-control" tabindex="1" value="0">
            <input id="subtitulo" style="display: none;" name="realizada" type="text" class="form-control" tabindex="1" value="0">
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection