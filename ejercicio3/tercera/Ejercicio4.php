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
    'equipo Español' =>[
    '1' => [
        'Portero' => 'Frank',
        'Defensa' => 'Pepe',
        'Medio' => 'Luis',
        'Delantero' => 'Raul'
    ],
    '2' => [
        'Portero' => 'Tiger',
        'Defensa' => 'Mourin',
        'Medio' => 'Katz',
        'Delantero' => 'Alberto'
    ],
        ],
    'equipo Mexicano' =>[
    '1' => [
        'Portero' => 'Suarez',
        'Defensa' => 'Koltz',
        'Medio' => 'Fernandez',
        'Delantero' => 'Ramirez'
    ]
         ],
    'equipo Argentino' =>[
    '1' => [
        'Portero' => 'Higuita',
        'Defensa' => 'Mel',
        'Medio' => 'Rubens',
        'Delantero' => 'Messi'
    ],
    '2' => [
        'Portero' => 'Kostenmeiner',
        'Defensa' => 'Lenkins',
        'Medio' => 'Marash',
        'Delantero' => 'Juanes'
    ]
        ]
];

foreach ($array as $nombres => $equipos) {
    echo "<tr><td>Equipo: $nombres</td>";
    
    foreach ($equipos as $num => $contenidos) {
        echo "<br>";
        echo "<td><br<br>$num<br></td>";
        foreach ($contenidos as $contenido => $valor) {
            echo "<br>";
            echo "<td><br<br>posicion: $contenido -> $valor<br></td>";
                    }
            }
    echo "</tr>";
}
?>
</table>
