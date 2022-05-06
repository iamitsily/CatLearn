@extends('adminlte::page')

@section('title', 'Cursos | Admin')

@section('content_header')
<h1>Cursos</h1>
@stop
@section('content')
<center>
    <h1>
        En esta sección puedes ver los cursos existentes, administrarlos y crear nuevos.
    </h1>
</center><br>
<a href="{{url('admin/cursos/nuevo')}}" class="btn btn-primary">CREAR CURSO</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoria</th>
            <th scope="col">Docente</th>
            <th scope="col">Participantes</th>
            <th scope="col">Likes</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->descripcion}}</td>
                <td>{{$curso->categoria}}</td>
                <td>{{$curso->docente}}</td>
                <td>{{$curso->participante}}</td>
                <td>{{$curso->gusta}}</td>
                <td>
                    <form action="{{route ('cursos.destroy',$curso->id)}}" method="POST">
                    <a class="btn btn-info" href="/admin/cursos/{{$curso->id}}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop