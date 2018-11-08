
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
    if ((validar_fechaAnyoMesDia($fechas) == 1)) {
    echo 'La fecha es correcta';
 
}else {
    echo 'La fecha no es correcta!';
    
}
// capturamos los datos en una variable desde la caja de texto de nuestro formulario

}
?> 