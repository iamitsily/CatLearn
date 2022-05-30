@extends('adminlte::page')

@section('title', 'CatLearn Cursos')

@section('content_header')
<h1>Cursos</h1>
@stop

@section('content')
<center>
    <h1>
        En esta sección puedes registrar nuevos cursos.
    </h1>
</center><br>
<form action="{{url('/admin/cursos')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Id User Encargado</label>
        <input id="id_user" name="id_user" type="text" class="form-control" tabindex="1">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Subtitulo</label>
        <input id="subtitulo" name="subtitulo" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="textarea" class="form-control" tabindex="2">
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
        <input id="docente" name="docente" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Participantes</label>
        <input id="participantes" name="participantes" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Likes</label>
        <input id="gusta" name="gusta" type="number" class="form-control" tabindex="6">
    </div><br>
    <div>
        <label for="" class="form-label">Imagen</label><br>
        <img id="imgSelect" style="max-height: 300px;"><br><br>
    </div>
    <div class="mb-3">
        <input id="img" name="img" type="file" class="hidden" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Inicio</label>
        <input id="inicio" name="inicio" type="date" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha Fin</label>
        <input id="fin" name="fin" type="date" class="form-control" tabindex="1">
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