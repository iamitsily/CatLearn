@extends('adminlte::page')

@section('title', 'CatLearn Cursos')

@section('content_header')
<h1>Cursos</h1>
@stop

@section('content')
<p>Cursos Existentes</p>
<?php
    $conexion=mysqli_connect('localhost','root','','catlearn');
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoria</th>
            <th scope="col">Imagen</th>
            <th scope="col">Docente</th>
            <th scope="col">Participantes</th>
            <th scope="col">Likes</th>
            
        </tr>
    </thead>
    <?php
        $sql = "SELECT * FROM curso";
        $result=mysqli_query($conexion,$sql);
        
        while($mostrar=mysqli_fetch_array($result)){
            ?>
   
        <tr>
            <th scope="row">1</th>
            <td><?php echo $mostrar['id_curso'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['imagen'] ?></td>
            <td><?php echo $mostrar['docente'] ?></td>
            <td><?php echo $mostrar['participante'] ?>
            <td><?php echo $mostrar['gusta'] ?>
        </td> 
        </tr>
    <?php    
    }
    ?>
</table>
<a class="btn btn-primary" href="{{url('/admin/cursos/nuevo')}}">Agregar Curso</a>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop