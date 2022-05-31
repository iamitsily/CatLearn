@extends('adminlte::page')

@section('title', 'CatLearn Cursos')

@section('content_header')
<h1>Cursos</h1>
@stop

@section('content')
<center>
    <h1>
        En esta sección puedes modificar los cursos registrados.
    </h1>
</center><br>

<form action="{{route('nuevocurso.update',$curso->id)}}" method="POST" enctype="multipart/form-data">
@csrf 
@method('PUT')
<div class="mb-3">
        <label for="" class="form-label">Id User Encargado</label>
        <input id="id_user" name="id_user" type="text" class="form-control" tabindex="1" value="{{$curso->id_user}}">
    </div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$curso->nombre}}">
</div>
<div class="mb-3">
        <label for="" class="form-label">Subtitulo</label>
        <input id="subtitulo" name="subtitulo" type="text" class="form-control" tabindex="1" value="{{$curso->subtitulo}}">
    </div>
<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$curso->descripcion}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3" value="{{$curso->categoria}}">
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
</div>
<div>
        <label for="" class="form-label">Imagen</label><br>
        <img id="imgSelect" style="max-height: 300px;" src="/img/cursos/{{$curso->imagen}}"><br><br>
    </div>
    <div class="mb-3">
        <input id="img" name="imagen_curso" type="file" class="form-control">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio</label>
        <input id="inicio" name="fecha_inicio" type="date" class="form-control" value="{{$curso->fecha_inicio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin</label>
        <input id="fin" name="fecha_fin" type="date" class="form-control" tabindex="1" value="{{$curso->fecha_fin}}">
    </div>
<br>    
<a href="{{url('admin/nuevocurso')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
<button type="submit" class="btn btn-primary" tabindex="4">GUARDAR</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script>
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imgSelect').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@stop