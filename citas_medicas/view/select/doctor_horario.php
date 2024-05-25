<?php

$conexion = mysqli_connect("localhost", "u554379922_usercognify", "Passcognify1", "u554379922_cognify");

$el_horario = $_POST['horario'];

$query = $conexion->query("SELECT * FROM horario WHERE coddoc = $el_horario");



while ($row = $query->fetch_assoc()) {
	echo '<option value="' . $row['codhor'] . '">' . $row['nomhor'] . '</option>' . "\n";
}
