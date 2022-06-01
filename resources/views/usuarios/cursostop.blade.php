@extends('usuarios.plantilla')

@section('title','Detalles')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Leccion Curso</h2>
        <p>Descubre tu nuevo curso, estos estan disponibles para ti. Revisalos e inscribete! uwu</p>
    </div>
</div>
<main id="main">
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="/img/cursos/{{$curso->imagen}}" alt="..." /></div>
                <div class="col-lg-5">
                    <br><br>
                    <h1 class="font-weight-light">{{$curso->nombre}}</h1>
                    <p>{{$curso->descripcion}}</p>
                    
                </div>
            </div>

            <div class="card text-white bg-success my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Lecciones Disponibles</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
            @foreach($curso->leccion as $lecc)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">{{$lecc->nombre}}</h2>
                            <p class="card-text">{{$lecc->informacion}}</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-success" href="{{route('CursoUser.leccion',$lecc->id)}}">Entrar</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection