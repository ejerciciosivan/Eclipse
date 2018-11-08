<!-- InicializaciÃ³n y escritura array -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo</title>
</head>
<body>
<?php
$array = [
    'Lenguajes servidor' => [
        'dato1' => 'este es el dato1',
        'dato2' => 'este es el dato2',
        'dato3' => 'este es el dato3'
    ],
    'Lenguajes cliente' => [
        'dato1' =>'este es el dato1',
        'dato2' => 'este es el dato1',
        'dato3' => 'este es el dato1'
    ]
    ];
foreach ($array as $inquilino => $datos) {
    echo "<p>$inquilino<br>";
    foreach ($datos as $dato => $valor) {
        echo "$dato: $valor<br>";
    }
    echo "</p>";
}
?>


