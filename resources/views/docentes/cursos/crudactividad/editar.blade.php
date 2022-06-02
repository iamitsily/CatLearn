@extends('usuarios.plantilla')
@section('title', 'Actividad')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Modificar Actividades</h2>
        <p>En esta seccion puedes modificar las Actividades de tu curso</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link text-success" href="javascript:history.back(-1)">Ir a lecciones</a>
            <a class="nav-link text-white bg-success disabled" href="">Editar Leccion</a>
     
        </nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('actividad.update',$actividad->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Titulo</label>
                <input id="nombre" name="titulo" type="text" class="form-control" tabindex="1" value="{{$actividad->titulo}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Entrega</label>
                <input id="subtitulo" name="fecha_entrega" type="date" class="form-control" tabindex="1" value="{{$actividad->fecha_entrga}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Documento</label>
                <input id="subtitulo" name="documento" type="text" class="form-control" tabindex="1" value="{{$actividad->documento}}">
            </div>
            <input id="subtitulo" style="display: none;" name="calificacion" type="text" class="form-control" tabindex="1" value="">
            <input id="subtitulo" style="display: none;" name="realizada" type="text" class="form-control" tabindex="1" value="">
            <br>
            <a href="javascript:history.back(-1)" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>
@endsection