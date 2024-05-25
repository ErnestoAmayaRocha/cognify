<?php
$hostname_conex = "localhost";
$database_conex = "u554379922_cognify";
$username_conex = "u554379922_usercognify";
$password_conex = "Passcognify1";
// creación de la conexión a la base de datos con mysql_connect()
$conex = mysqli_connect($hostname_conex, $username_conex, $password_conex, $database_conex) or
    die("No se ha podido conectar al servidor de Base de datos");
