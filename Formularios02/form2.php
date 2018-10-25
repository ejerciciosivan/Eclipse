<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Cadena: <input TYPE="text" NAME="cadena"><br>
	<p>OPCIONES:</p>
	Codigo postal <input TYPE="radio" NAME="opc" value="cpostal"><br> 
	 Email: <input TYPE="radio" NAME="opc" value="telefono"><br>
	 Codigo postal: <input TYPE="radio"NAME="opc" value="direc"><br>
	 <br>
	 <input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>