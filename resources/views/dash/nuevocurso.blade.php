@extends('adminlte::page')

@section('title', 'CatLearn Cursos')

@section('content_header')
<h1>Cursos</h1>
@stop

@section('content')
<p>Añadir Curso</p>
<form class="form-inline" action="{{url('insert.php')}}" method="POST">
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Id Curso">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="id" placeholder="Id Curso" name="Id">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nombre">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Descripción">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="descripcion" placeholder="Descripción" name="descripcion">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="categoria" value="Categoria">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="inputPassword2" placeholder="Categoria" name="categoria">
  </div>
  
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Imagen">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="imagen" placeholder="Seleccionar Archivo" name="imagen">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Docente">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="docente" placeholder="Docente" name="docente">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Participantes">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="participantes" placeholder="Participantes" name="participante">
  </div>

  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Like">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="password" class="form-control" id="like" placeholder="Like" name="like">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Añadir curso</button>
</form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop