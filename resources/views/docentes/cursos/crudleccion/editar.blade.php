@extends('usuarios.plantilla')
@section('title', 'Lecciones')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Modificar Lecciones</h2>
        <p>En esta seccion puedes modificar las lecciones de tu curso</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Ir a lecciones</a>
            <a class="nav-link text-white bg-success disabled" href="">Editar Leccion</a>
            <a class="nav-link text-success" href="{{route('actividad.show',$leccion->id)}}">Actividades</a>
            <a class="nav-link text-success" href="{{route('tarea.show',$leccion->id)}}">Tareas</a>
            <a class="nav-link text-success" href="{{route('examen.show',$leccion->id)}}">Examenes</a>
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('lecciones.update',$leccion->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$leccion->nombre}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Información</label>
                <input id="subtitulo" name="informacion" type="text" class="form-control" tabindex="1" value="{{$leccion->informacion}}">
            </div>
            <br>
            <a href="{{route('lecciones.show',$leccion->id)}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection