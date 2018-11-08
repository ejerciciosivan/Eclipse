<!-- InicializaciÃ³n y escritura array -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
<?php
$fotos = array();
$fotos = array('fotos/a1.jpg', 'fotos/a2.jpg', 'fotos/a3.jpg', 'fotos/a4.jpg');

$num = rand(0, 4);
    echo '<img src="' . $fotos[$num] . '" /><br />';

?>