<?php
$contrasena = 'Passcognify1';
$usuario = 'u554379922_usercognify';
$nombrebd = 'u554379922_cognify';

try {
	$bd = new PDO(
		'mysql:host=localhost;
			dbname=' . $nombrebd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Error de conexión " . $e->getMessage();
}
