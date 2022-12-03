<?php

session_start();

$conexion = mysqli_connect(
    'localhost',//nombre de la conexion
    'root',//Usuario
    'pass',//Contraseña
    'taskslist'//nombre de base de datos
);

?>