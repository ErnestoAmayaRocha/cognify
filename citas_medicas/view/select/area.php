<?php

$conexion = mysqli_connect("localhost", "u554379922_usercognify", "Passcognify1", "u554379922_cognify");

$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM doctor WHERE codespe = $el_continente");

echo '<option value="0">Seleccione</option>';

while ($row = $query->fetch_assoc()) {
	echo '<option value="' . $row['coddoc'] . '">' . $row['nomdoc'] . '</option>' . "\n";
}
