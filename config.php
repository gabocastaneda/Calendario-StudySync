<?php

$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "practicas";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al servidor");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la base de datos");
