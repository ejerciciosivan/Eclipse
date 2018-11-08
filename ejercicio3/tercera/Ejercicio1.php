<!-- InicializaciÃ³n y escritura array -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
	<table border =1>
<?php

$array = [
    'Colores fuertes' => [
        'Rojo' => 'FF0000',
        'Verde' => '00FF00',
        'Azul' => '0000FF'
    ],
    'Colores suaves' => [
        'Rosa' =>'FE9ABC',
        'Amarillo' => 'FDF189',
        'Malva' => 'BC8F8F'
    ]
    ];
foreach ($array as $clores => $datos) {
    echo "<tr><td>$clores</td>";
    foreach ($datos as $dato => $valor) {
        echo "<td bgcolor =\#$dato\">$dato: $valor</td>";
    }

    echo "</tr>";
}
?>
</table>


