<?php
include ('bGeneral.php');
cabecera ($_SERVER ['PHP_SELF']); //el archivo actual
echo "Valor:", $_GET['nombre'];
echo '<br>';
pie();
?>