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
$dado = array();
//AÃ±adiendo elementos. Dos formas de hacerlo
$dado = array("Uno", "Dos", "Tres", "Cuatro", "Cinco", "Seis");

$claves_aleatorias = array_rand($dado, 2);
echo $dado[$claves_aleatorias[0]] . "\n";

?>

