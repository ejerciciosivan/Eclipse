<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
$errores[] = array();
if (! isset($_REQUEST['bAceptar'])) {
include ('form.php');

}  // En esta parte comprobamos los datos recibidos
else {
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    $email = recoge("email");
    $cpostal = recoge("cpostal");
    
    if ((cTexto($nombre) == 0)) {
        $errores['nombre'] = 'El nombre no es correcto';
        $error = true;
    }
    if ((cNum($edad) == 0)) {
        $errores['edad'] = 'La edad no es correcta';
        $error = true;
    }
    if ((Vemail($email) == 1)) {
        $errores['email'] = 'El email es incorrecto, reviselo';
        $error = true;
    }
    if ((validaPostal($cpostal) == 0)) {
        $errores['cpostal'] = 'El codigo postal es incorrecto, reviselo';
        $error = true;
    }
    if (! $error) {
        header("location:PrimeroCorrecto.php?nombre=$nombre&edad=$edad&email=$email&cpostal=$cpostal");
    } else {
        
        ?>
<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>" METHOD='post'>
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>">
	<br>
		<?php
        
        echo '<br>';
        if (isset($errores['nombre']))
            echo "$errores[nombre] <br>";
        ?>
         email: <input TYPE="text" NAME="email" VALUE="<?php echo $email;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['email']))
            echo "$errores[email] <br>";
        ?>
           codigo postal: <input TYPE="text" NAME="cpostal" VALUE="<?php echo $cpostal;?>">
        <br>
        <?php
       
        echo '<br>';
        if (isset($errores['cpostal']))
            echo "$errores[cpostal] <br>";
        ?>
	    Edad: <input TYPE="text" NAME="edad" VALUE="<?php echo $edad; ?>"> 
	    <br>
		<?php
        if (isset($errores['edad']))
            echo $errores['edad'];
        echo '<br>';
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>
	