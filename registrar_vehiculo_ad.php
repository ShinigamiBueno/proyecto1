<?php
include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";
  include("header_ad.php");

if (isset($_POST['enviar'])) {
   	$clave_vehiculo=$_POST['clave_vehiculo'];
    $modelo_vehiculo=$_POST['modelo_vehiculo'];
   	$marca_vehiculo=$_POST['marca_vehiculo'];
   	$placas_vehiculo=$_POST['placas_vehiculo'];
   	$tipo_combustible_vehiculo=$_POST['tipo_combustible_vehiculo'];
    $capacidad_litros_vehiculo=$_POST['capacidad_litros_vehiculo'];
    $tipo_filtro_vehiculo=$_POST['tipo_filtro_vehiculo'];
   	
      echo " 
    <center>
    <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
    <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
    </center>"; 
    
	if ($insert_stmt = $mysqli->prepare("INSERT INTO vehiculos(idvehiculo,clave_vehiculo,modelo_vehiculo,marca_vehiculo,placas_vehiculo,tipo_combustible_vehiculo,capacidad_litros_vehiculo,tipo_filtro_vehiculo) VALUES (?,?,?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('isssssss', $idvehiculo,$clave_vehiculo,$modelo_vehiculo,$marca_vehiculo,$placas_vehiculo,$tipo_combustible_vehiculo,$capacidad_litros_vehiculo,$tipo_filtro_vehiculo);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}
	}
}
include("footer_ad.php");
?>