@extends('usuarios.plantilla')
@section('title', 'Editar Curso')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <h2>Modificar Curso</h2>
        <p>En esta sección puedes modificar</p>
    </div>
</div>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
<nav class="nav nav-pills nav-justified">
  <a class="nav-link active disabled bg-success" href="#">Opciones</a>
  <a class="nav-link text-success" href="{{route('lecciones.show',$curso->id)}}">Lecciones</a>
</nav>
    </div>
</section>
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">
        <form action="{{route('cursos.update',$curso->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Docente Creador</label>
                <input id="id_user" name="" disabled type="text" class="form-control" tabindex="1" value="{{auth()->user()->name}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$curso->nombre}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Subtitulo</label>
                <input id="subtitulo" name="subtitulo" type="text" class="form-control" tabindex="1" value="{{$curso->descripcion}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input id="descripcion" name="descripcion" type="textarea" class="form-control" tabindex="2" value="{{$curso->descripcion}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <select name="categoria">

                    <option>Español</option>

                    <option>Matematicas</option>

                    <option>Programacion</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Docente</label>
                <input id="docente" name="docente" type="text" class="form-control" tabindex="4" value="{{$curso->docente}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Participantes</label>
                <input id="participantes" name="participante" type="number" class="form-control" tabindex="5" value="{{$curso->participante}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Likes</label>
                <input id="gusta" name="gusta" type="number" class="form-control" tabindex="6" value="{{$curso->gusta}}">
            </div><br>
            <div>
                <label for="" class="form-label">Imagen</label><br>
                <img id="imgSelect" style="max-height: 300px;" src="/img/cursos/{{$curso->imagen}}"><br><br>
            </div>
            <div class="mb-3">
                <input id="img" name="imagen_curso" type="file" class="hidden" tabindex="6">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Inicio</label>
                <input id="inicio" name="fecha_inicio" type="date" class="form-control" tabindex="1" value="{{$curso->fecha_inicio}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha Fin</label>
                <input id="fin" name="fecha_fin" type="date" class="form-control" tabindex="1" value="{{$curso->fecha_fin}}">
            </div>

            <br>
            <a href="{{url('/docente/cursos')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
            <button type="submit" class="btn btn-success" tabindex="4">GUARDAR</button>
        </form>
    </div>
</section>


@endsection