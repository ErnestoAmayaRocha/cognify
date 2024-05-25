<?php

$conexion = mysqli_connect("localhost", "u554379922_usercognify", "Passcognify1", "u554379922_cognify");

$query = $conexion->query("SELECT * FROM doctor");

echo '<option value="0">Seleccione el doctor</option>';

while ($row = $query->fetch_assoc()) {
	echo '<option value="' . $row['coddoc'] . '">' . $row['nomdoc'] . '</option>' . "\n";
}
