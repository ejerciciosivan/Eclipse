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
$pila = [
    'cinco' => [
        5
    ],
    'uno' => [
        1
    ],
    'cuatro' => [
        4
    ],
    'dos' => [
        2
    ],
    'tres' => [
        3
    ],
    
];
//asort($pila);
//arsort($pila);
//ksort($pila);
//sort($pila);
rsort($pila);

foreach ($pila as $numlist => $materias) {
    echo "<tr><td>Numero: $numlist</td>";
    foreach ($materias as $materia => $valor) {
        echo "<td> $valor</td>";  
    }

    echo "</tr>";
}
    


?>
</table>

