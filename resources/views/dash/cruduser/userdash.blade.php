@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Usuarios</h1>
@stop

@section('content')

<center>
    <h3>
        En esta sección puedes ver los usuarios existentes, administrarlos y crear nuevos.
    </h3>
</center><br>
<a href="{{url('/admin/usuarios/nuevo')}}" class="btn btn-primary">CREAR USUARIO</a>
<br><br>
<table class="table table-striped table-bordered shadow-lg mt-4" id="cursos" style="width:100%">
    <thead class="bg-green text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Id_rol</th>
            <th scope="col">email</th>
            <th scope="col">Contraseña (Crypted)</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->number}}</td>
            <td>{{$user->id_rol}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <form action="{{route ('cursos.destroy',$user->id)}}" method="POST" class="formEliminar">
                    <a class="btn btn-info" href="/admin/cursos/{{$user->id}}/edit">Editar</a><br>
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