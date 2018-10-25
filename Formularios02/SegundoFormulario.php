<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
$errores[] = array();
if (! isset($_REQUEST['bAceptar'])) {

    include ('form2.php');

}  // En esta parte comprobamos los datos recibidos
else {
    $cadena = recoge("cadena");
    
    switch ( $_POST['opc']) {
        case "cpostal":
            if ((validaPostal($cadena) == 0)) {
                $errores['cpostal'] = 'El codigo postal es incorrecto, reviselo';
                $error = true;
            }
            break;
        case "telefono":
            if ((validaTelefono($cadena) == 0)) {
                $errores['cpostal'] = 'El telefono es incorrecto, reviselo';
                $error = true;
            }
            break;
        case "direc":
            if ((validaDireccion($cadena) == 0)) {
                $errores['cpostal'] = 'La direccion es incorrecta, reviselo';
                $error = true;
            }
            break;
    }
  
    if (! $error) {
        header("location:PrimeroCorrecto.php?nombre=$cadena");
    } else {
        
        ?>

<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Cadena: <input TYPE="text" NAME="cadena"><br>
	
	<p>OPCIONES:</p>
	Codigo postal <input TYPE="radio" NAME="opc" value="cpostal"><br> 
	 Email: <input TYPE="radio" NAME="opc" value="telefono"><br>
	 Codigo postal: <input TYPE="radio"NAME="opc" value="direc"><br>
	 	<?php
        
        echo '<br>';
        if (isset($errores['cpostal']))
            echo "$errores[cpostal] <br>";
        ?>
        
        }
}
	 <br>
	 <input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
<?php

pie();
?>	