<?php
include_once 'includes/db_connect.php';



echo '<h1>Hola</h1>';
$consultar=$mysqli->query('SELECT nombre,apellido_paterno,apellido_materno,habilitado FROM representantes_legales');
echo '<select name="representantes_legales" id="representantes_legales">';
while($imagenes=mysqli_fetch_array($consultar))
{
	echo '<option value='.$imagenes['idrepresentantes_legales'].'>'.$imagenes['nombre'].' '.$imagenes['apellido_paterno'].' '.$imagenes['apellido_materno'].'</option>';
}
echo '</select>';
?>
