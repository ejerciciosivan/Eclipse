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
    'España' => [
        'Madrid'
    ],
    'Alemania' => [
        'Berlin'
    ],
    'Angola' => [
        'Luanda'
    ],
    'Catar' => [
        'Doha'
    ],
    'Colombia' => [
        'Bogotá'
    ],
    
];
asort($pila);
//arsort($pila); 
//
//ordena un array manteniendo la correlación de los índices del array
//con los elementos con los que están asociados. 
//Esta función se utiliza principalmente para ordenar arrays asociativos
//en los que el orden es importante
//
//ksort($pila);
//
//Ordena un array por clave, manteniendo la correlación entre la clave
//y los datos. Esto es útil principalmente para arrays asociativos. 
//
//sort($pila); ordena el array menor a mayor
//rsort($pila);
//Esta función ordena un array. 
//Los elementos estarán ordenados de menor a mayor cuando la función haya terminado. 
//

foreach ($pila as $numlist => $materias) {
    echo "<tr><td>País: $numlist</td>";
    foreach ($materias as $materia => $valor) {
        echo "<td>capital: $valor</td>";  
    }

    echo "</tr>";
}
    


?>
</table>

