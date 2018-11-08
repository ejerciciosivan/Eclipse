
<html>
<head>
</head>
<body>
<form method="post" >
<input type="text" name="fechas" />
<input type="submit" value="Validar Fecha" name="validar" />
</form>
</body>
</html>

<?php
include ('bGeneral.php');
// vemos si hay datos
if(isset($_POST["validar"]))

{
    $fechas = recoge("fechas");
    validar_unix($fechas);
    echo $fechas;
// capturamos los datos en una variable desde la caja de texto de nuestro formulario

}
?> 