<!-- InicializaciÃ³n y escritura array -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
<?php
//declaraciÃ³n de un array vacio. No es obligatorio hacerlo
$semana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

for ($i = 0; $i < count($semana); $i++) {
	echo "Elemento $i: $semana[$i]<br>";
}

foreach ($semana as $clave => $valor) {
    echo "Clave: $clave; Valor: $valor</br>";
}
?>


