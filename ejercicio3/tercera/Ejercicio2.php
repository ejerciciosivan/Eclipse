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
    '3' => [
        'Servidor' => '7',
        'Cliente' => '6',
        'Ingles' => '5'
    ],
    '6' => [
        'Servidor' => '7',
        'Cliente' => '8',
        'Ingles' => '7'
    ],
    '9' => [
        'Servidor' => '4',
        'Cliente' => '4',
        'Ingles' => '5'
    ],
    '12' => [
        'Servidor' => '7',
        'Cliente' => '7',
        'Ingles' => '7'
    ],
    '14' => [
        'Servidor' => '9',
        'Cliente' => '6',
        'Ingles' => '9'
    ]
    ];
foreach ($array as $numlist => $materias) {
    echo "<tr><td>Numero lista: $numlist</td>";
    foreach ($materias as $materia => $valor) {
        echo "<td>$materia: $valor</td>";
        $res=(($valor+$valor+$valor)/count($materias));
       
    }
    echo "<td>Nota media:($res)</td> ";
    echo "</tr>";
}
?>
</table>


