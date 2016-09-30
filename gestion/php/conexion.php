<?php
$conexion = mysql_connect('127.0.0.1', 'root', 'Therion1992');
mysql_select_db('tienda', $conexion);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
?>