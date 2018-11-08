﻿<?php
require_once ('bGeneral.php');
function cabecera($titulo) //el archivo actual
{
?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function recogeArray($var)
{
    if (!empty($_REQUEST[$var])){
        $array=$_REQUEST[$var];
        foreach ($array as $value){
            $tmp[]=strip_tags(sinEspacios($value));
        }
    }else
        $tmp= "";
    

    return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}
function cTextoEspacio ($text)
{
    if (preg_match("/^[A-Za-zÑñ ]+$/", sinTildes($text)))
        return 1;
    else
        return 0;
}

function cNumTexto ($text)
{
    if (preg_match("/^[A-Za-zÑñ0-9]+$/", sinTildes($text)))
        return 1;
    else
        return 0;
}

function cNum ($num)
{
	if (preg_match("/^[0-9]+$/", $num))
		return 1;
	else
		return 0;
}
function validar_fecha($fecha){
       
    //usamos la funcion explode y ponemos como cortador /
 
    $partes= explode("/", $fecha);

    
    //vemos si la fecha es correcta recuerda que aqui la funcion es dia/mes/año
    //pero en la caja de texto dia/mes/año para no complicar al usuario
    
    If (checkdate ($partes[0],$partes[1],$partes[2]))
    {
        return 1;
    }
    else
    {
        return 0;
    }

}
function validar_fechaAnyoMesDia($fecha){
    
    //usamos la funcion explode y ponemos como cortador /
    $partes= explode("/", $fecha);
    //vemos si la fecha es correcta recuerda que aqui la funcion es mes/dia/año
    //pero en la caja de texto dia/mes/año para no complicar al usuario
    
    If (checkdate ($partes[2],$partes[1],$partes[0]))
    {
        return 1;
    }
    else
    {
        return 0;
    }
    
}
function validar_unix($fecha){
    
    
    $fechaFormateada = date("d-m-Y", $fecha);
    return $fechaFormateada;
}
?>