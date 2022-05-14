@extends('usuarios.plantilla')

@section('title','Casa')

@section('content')
<br><br>

<!-- primera sección -->

<section class="bg-cover" style="background-image: url({{asset('img/home/a.jpg')}})">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
    <div class="w-full md:w-3/4 lg:w-1/2"> 
    <h1 class="text-white font-fold text-4xl">Bienvenido A Catlearn </h1>
    <p class="text-white text-lg mt-2 mb-4" >CatLearn plataforma de apredizaje</p>>

        <!-- component -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

     <div class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
            <input wire:model="search" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
            type="search" name="search" placeholder="Search">
        <!-- si quieres ajustar el buscador solo borrar w-full jiji y abajo agustalo con mt :3 -->
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
            Buscar
            </button>
    </div>

    </div>

</div>
</section>

<!-- Otra sección del home gap-x-6 -->

<section class= "mt-24"> 
    <h1 class="text-gray-600 text-center text-3xl mb-6 "> Contenidos </h1> 

    <div  class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gap-y-8">

    <article>
            <figure>
             <img class= "rounded-xl h-36 w-full object-cover"src="{{asset('img/home/developer-g50748cf70_640.png')}} " alt="">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl gray-700">Desarrollo De Aplicaciones Web</h1>
                <p class="text-sm text-center text-gray-500">Laravel hasta la cuna</p>
            </header>

        </article>

        <article>
            <figure>
                <img class= "rounded-xl h-36 w-full object-cover" src="{{asset('img/home/mathematics-g660646229_640.jpg')}}" alt="">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl gray-700">Ecuaciones Diferenciales</h1>
                <p class="text-sm text-center text-gray-500">Las matematicas mueven al mundo</p>
            </header>

        </article>

        <article>
            <figure>
                <img class= "rounded-xl h-36 w-full object-cover" src="{{asset('img/home/web-g354528421_640.png')}}" alt="">
            </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl gray-700">Modelado De Base De Datos</h1>
                <p class="text-sm text-center text-gray-500">Curso completo xd</p>
            </header>
        </article>


    </div>
</section>

<!-- Aparatado de ayuda-->

<section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-white text-3xl">¿Necesitas ayuda?</h1>
    <p class="text-center text-white text"> contactanos: correo@pruebaxd.com</p>

    <!-- Conectar en el a cuando este la seccion de cursos -->
    <div class="flex justify-center mt-4">
      <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
         Soporte
      </a>
    </div>
</section>

<section class="my-24 ">
    <h1 class="text-center text-3xl text-gray-600">Cursos Accedidos Recientemente </h1>
    <p class="text-center text-gray-500 text-sm mb-6"> Catlearn la plataforma educativa mas buena que existe</p>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

    AQUIIIIIIIII mostrar los cursos
    </div>
</section>


@endsection