<?php
$username = "root";
$password = "";
$database = "catlearn";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$field1 = $mysqli->real_escape_string($_POST['id']);
$field2 = $mysqli->real_escape_string($_POST['nombre']);
$field3 = $mysqli->real_escape_string($_POST['descripcion']);
$field4 = $mysqli->real_escape_string($_POST['categoria']);
$field5 = $mysqli->real_escape_string($_POST['imagen']);
$field6 = $mysqli->real_escape_string($_POST['docente']);
$field7 = $mysqli->real_escape_string($_POST['participante']);
$field8 = $mysqli->real_escape_string($_POST['like']);


$query = "INSERT INTO curso (id_curso, nombre, descripcion, categoria, imagen, docente, participante, gusta)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}','{$field7}','{$field8}')";

$mysqli->query($query);
$mysqli->close();