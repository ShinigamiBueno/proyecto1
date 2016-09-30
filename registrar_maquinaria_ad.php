<?php
include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";
  include("header_ad.php");

if (isset($_POST['enviar'])) {
   	$modelo_maquinaria=$_POST['modelo_maquinaria'];
    $num_serie_maquinaria=$_POST['num_serie_maquinaria'];
   	$marca_maquinaria=$_POST['marca_maquinaria'];
   	$tipo_combustible_maquinaria=$_POST['tipo_combustible_maquinaria'];
   	$capacidad_litros_maquinaria=$_POST['capacidad_litros_maquinaria'];
    $filtro_diesel_maquinaria=$_POST['filtro_diesel_maquinaria'];
    $filtro_trampa_maquinaria=$_POST['filtro_trampa_maquinaria'];
    $filtro_hidraulico_maquinaria=$_POST['filtro_hidraulico_maquinaria'];
    $filtro_aceite_maquinaria=$_POST['filtro_aceite_maquinaria'];
    $filtro_aire_maquinaria=$_POST['filtro_aire_maquinaria'];
    $llanta_trasera_maquinaria=$_POST['llanta_trasera_maquinaria'];
    $llanta_delantera_maquinaria=$_POST['llanta_delantera_maquinaria'];
    $tipo_aceite_maquinaria=$_POST['tipo_aceite_maquinaria'];
    $clave_maquinaria=$_POST['clave_maquinaria'];
      
      echo " 
    <center>
    <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
    <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
    </center>";  

  
	if ($insert_stmt = $mysqli->prepare("INSERT INTO maquinaria(idmaquinaria,modelo_maquinaria,num_serie_maquinaria,marca_maquinaria,tipo_combustible_maquinaria,capacidad_litros_maquinaria,filtro_diesel_maquinaria,filtro_trampa_maquinaria,filtro_hidraulico_maquinaria,filtro_aceite_maquinaria,filtro_aire_maquinaria,llanta_trasera_maquinaria,llanta_delantera_maquinaria,tipo_aceite_maquinaria,clave_maquinaria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('issssssssssssss', $idmaquinaria,$modelo_maquinaria,$num_serie_maquinaria,$marca_maquinaria,$tipo_combustible_maquinaria,$capacidad_litros_maquinaria,$filtro_diesel_maquinaria,$filtro_trampa_maquinaria,$filtro_hidraulico_maquinaria,$filtro_aceite_maquinaria,$filtro_aire_maquinaria,$llanta_trasera_maquinaria,$llanta_delantera_maquinaria,$tipo_aceite_maquinaria,$clave_maquinaria);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		    

		    



		}
	}
}

include("footer_ad.php");

?>