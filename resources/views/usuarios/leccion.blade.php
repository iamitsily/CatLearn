@extends('usuarios.plantilla')

@section('title','Leccion')

@section('content')
<div class="breadcrumbs">
    <div class="container">
        <h2>Leccion Curso</h2>
        <p>Revisa la increible lección que tenemos para ti</p>
    </div>
</div>
<main id="main">
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{$leccion->nombre}}</h1>

                    </header>
                   
                    <section class="mb-5">
                        {{$leccion->informacion}}
                    </section>
                </article>

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">

                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Tareas | Actividades</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                    
                                    @foreach($leccion->tarea as $tare)
                                        @if($tare->realizada==0)
                                        <li><a href="{{route('CursoUser.tarea',$tare->id)}}">{{$tare->titulo}}</a></li>
                                        @else
                                        <li>{{$tare->titulo}} | Hecha</li>
                                        @endif
                                    @endforeach
                            </div>
                            <div class="col-sm-6">
                                    @foreach($leccion->actividad as $acti)
                                        @if($acti->realizada==0)
                                    <li><a href="{{route('CursoUser.actividad',$acti->id)}}">{{$acti->titulo}}</a></li>
                                        @else
                                    <li>{{$acti->titulo}} | Hecha</li>
                                        @endif
                                   @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Examenes</div>
                    <div class="card-body">
                        @foreach($leccion->examen as $exam)
                            @if($exam->realizada==0)
                            <li><a href="{{route('CursoUser.examen',$exam->id)}}">{{$exam->titulo}}</a></li>
                            @else
                            <li>{{$exam->titulo}} | Hecha</li>
                            @endif
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection