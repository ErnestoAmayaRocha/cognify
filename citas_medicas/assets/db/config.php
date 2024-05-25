<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'u554379922_usercognify');
define('dbpass', 'Passcognify1');
define('dbname', 'u554379922_cognify');

// Connecting database
try {
	$connect = new PDO("mysql:host=" . dbhost . "; dbname=" . dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
