@extends('adminlte::page')

@section('title', 'CatLearn Panel')

@section('content_header')
<h1>Aadministrador</h1>
@stop

@section('content')
<center>
    <h1>
        En esta sección puedes registrar nuevos usuarios.
    </h1>
</center><br>
<form action="{{url('/admin/cursos')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Id_rol</label>
        <input id="categoria" name="categoria" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input id="docente" name="docente" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="participantes" name="participantes" type="number" class="form-control" tabindex="5">
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
@stop