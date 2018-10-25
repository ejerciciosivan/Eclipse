<?php

// funcion para establecer la cabecera
function cabecera($titulo) // el archivo actual
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
<meta charset="utf-8" />
</head>
<body>
<?php
}

// funcion para el pie
function pie()
{
    echo "</body>
	</html>";
}

// eliminar tildes
function sinTildes($frase)
{
    $no_permitidas = array(
        "á",
        "é",
        "í",
        "ó",
        "ú",
        "Á",
        "É",
        "Í",
        "Ó",
        "Ú",
        "à",
        "è",
        "ì",
        "ò",
        "ù",
        "À",
        "È",
        "Ì",
        "Ò",
        "Ù"
    );
    $permitidas = array(
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U",
        "a",
        "e",
        "i",
        "o",
        "u",
        "A",
        "E",
        "I",
        "O",
        "U");
    $texto = str_replace($no_permitidas, $permitidas, $frase);
    return $texto;
}

// eliminar espacios
function sinEspacios($frase)
{
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}

// sanear texto
function recoge($var)
{
    if (isset($_REQUEST[$var]))
        $tmp = strip_tags(sinEspacios($_REQUEST[$var]));
    else
        $tmp = "";

    return $tmp;
}

// filtro texto
function cTexto($text)
{
    if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
        return 1;
    else
        return 0;
}

// filtro numero
function cNum($num)
{
    if (preg_match("/^[0-9]+$/", $num))
        return 1;
    else
        return 0;
}

// filtro para validar el email
function Vemail($email)
{
    $email = $_POST['email'];
    // Queremos que el email tenga un formato adecuado
    if (! preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
        return 1;
    } else
        return 0;
}

// filtro de codigo postal
function validaPostal($cadena)
{
    // Comrpobamos que realmente se ha añadido el formato correcto
    if (preg_match('/^[0-9]{5}$/i', $cadena)) {
        // La instruccion se cumple
        return 1;
    } else
        // Contiene caracteres no validos
        return 0;
}

function validaTelefono($val)
{
    $patrones = $sustituciones = array();
    $patrones[0] = '/-/';
    $patrones[1] = '/\s/';
    $sustituciones[0] = '';
    $sustituciones[1] = '';
    $val = preg_replace($patrones, $sustituciones, $val);
    if (! preg_match("/^[0-9]{9}$/", $val)) {
        return false;
    }
    return true;
}

function validaDireccion($val)
{
    if (preg_match("/^calle/i", $val)) {
        return true;
    } else {
        return false;
    }
    if (preg_match("/^avenida/i", $val)) {
        return true;
    } else {
        return false;
    }
    if (preg_match("/^paseo/i", $val)) {
        return true;
    } else {
        return false;
    }
}


?>