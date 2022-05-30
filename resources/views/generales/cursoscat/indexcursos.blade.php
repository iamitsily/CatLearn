@extends('layouts.plantilladash.vacia')
@section('title', 'Cursos')

@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Cursos</h2>
        <p>Hola!, te damos la bienvenida a los cursos. Esperamos encuentres lo que buscas y puedas quedarte para comrpobar por qué somos una buena plataforma para aprender! </p>
    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="course-item">
                    <img src="{{asset('img/home/a3.jpg')}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Web</h4>
                            <p class="price">Curso</p>
                        </div>

                        <h3><a href="{{url('/home')}}">Dseño web</a></h3>
                        <p>Con este curso sin coste te introducirás en el diseño de páginas web de manera profesional.
                            En la primera parte del curso aprenderás cómo nació la Web y cómo ha llegado a ser lo que es hoy.
                             Serás capaz de crear páginas web correctas de manera profesional utilizando HTML5.</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span>Antonio</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;50
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;65
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="course-item">
                    <img src="{{asset('img/home/a4.jpg')}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Matematicas</h4>
                            <p class="price">Curso</p>
                        </div>

                        <h3><a href="{{url('/home')}}">Métodos Numericos</a></h3>
                        <p>Con el curso de métodos numéricos aprenderás a identificar ecuaciones lineales y no lineales para la solución de problemas,
                             realizando cálculos aritméticos y lógicos orientados a la computación científica.</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                                <span>Tere</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;35
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;42
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="course-item">
                    <img src="{{asset('img/home/a5.jpg')}}" class="img-fluid" alt="...">
                    <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Programación</h4>
                            <p class="price">Curso</p>
                        </div>

                        <h3><a href="{{url('/home')}}">Introducción a Java</a></h3>
                        <p>Este es un curso introductorio a la programación en Java. Como Java es un lenguaje orientado a objetos de propósito general, revisaremos los conceptos básicos del lenguaje como clases e interfaces. Veremos los ingredientes básicos de una clase como constantes y variables, funciones (métodos), y cómo organizar estos ingredientes dentro de una clase. 
                            También veremos la utilización de clases de las bibliotecas de Java..</p>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                                <span>Brandon</span>
                            </div>
                            <div class="trainer-rank d-flex align-items-center">
                                <i class="bx bx-user"></i>&nbsp;20
                                &nbsp;&nbsp;
                                <i class="bx bx-heart"></i>&nbsp;85
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Course Item-->

        </div>

    </div>
</section><!-- End Courses Section -->
@endsection