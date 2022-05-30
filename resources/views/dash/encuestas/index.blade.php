@extends('adminlte::page')

@section('title', 'Encuestas')

@section('content_header')
<h1>Encuestas</h1>
@stop

@section('content')
<a href="{{route('encuestas.create')}}" class="btn btn-primary">CREAR ENCUESTA</a>
<br>


<div class="container">
    <div class="row">
        @foreach ($encuestas as $encuesta)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$encuesta->nombre}}</h5>
                    <p class="card-text">{{$encuesta->descripcion}}</p>
                    <p class="card-text">{{$encuesta->link}}</p>
                    <a href="/admin/encuestas/{{$encuesta->id}}/show" class="btn btn-primary">Ver</a>
                    <form action="{{route ('encuestas.destroy',$encuesta->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                    <a class="btn btn-success" href="/admin/cursos/{{$encuesta->id}}/edit">Editar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop