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
    'fotos/a1.jpg' => [
        'Dato Annimal' => 'Tiene dedos en lugar de garras',
        'Dato Animal1' => 'Grandes ojos',
        'Dato Annimal2' => 'Se alimenta de frutas'
    ],
    'fotos/a2.jpg' => [
        'Dato Annimal' => 'Suele estar en los arboles',
        'Dato Annimal1' => 'No es muy r�pido',
        'Dato Annimal2' => 'Se alimenta de hojas de eucalipto'
    ],
    'fotos/a3.jpg' => [
        'Dato Annimal' => 'Pueden nadar',
        'Dato Annimal1' => 'Los osos son omn�voros',
        'Dato Annimal2' => 'Son mam�feros'
    ],
    'fotos/a4.jpg' => [
        'Dato Annimal' => 'Gran visi�n',
        'Dato Annimal1' => 'Tienen plumas',
        'Dato Annimal2' => 'Pico curvo y garras para poder alimentarse de presas'
    ]
];

foreach ($array as $foto => $datos) {
    echo '<tr><img src="' . $foto . '"<br>';
    
    foreach ($datos as $dato => $explicacion) {
        echo "<br>";
        echo "<br<br>$dato: $explicacion<br>";

        //$claves_aleatorias = array_rand($datos, 2);
        //echo $datos[$claves_aleatorias[0]] . "$explicacion\n";
        
    }
    echo "</tr>";
}
?>
</table>
