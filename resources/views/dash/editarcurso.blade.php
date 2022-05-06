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

<form action="/admin/cursos/{{$curso->id}}" method="POST">
@csrf 
@method('PUT')
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$curso->nombre}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$curso->descripcion}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Categoria</label>
    <input id="categoria" name="categoria" type="number" class="form-control" tabindex="3" value="{{$curso->categoria}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Docente</label>
    <input id="docente" name="docente" type="text" class="form-control" tabindex="4" value="{{$curso->docente}}">
</div>
<div class="mb-3">
    <label for="" class="form-label">Participantes</label>
    <input id="participantes" name="participantes" type="number" class="form-control" tabindex="5" value="{{$curso->participante}}">
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
        <input id="img" name="img" type="file" class="hidden" tabindex="6">
    </div>

<br>    
<a href="{{url('admin/cursos')}}" class="btn btn-secondary" tabindex="5">CANCELAR</a>
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