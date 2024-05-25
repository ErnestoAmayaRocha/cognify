<?php

$mysqli = new mysqli('localhost', 'u554379922_usercognify', 'Passcognify1', 'u554379922_cognify');

if ($mysqli->connect_error) {

	die('Error en la conexion' . $mysqli->connect_error);
}
