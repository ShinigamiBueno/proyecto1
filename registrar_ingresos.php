<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	$page_title="Constructora";
 	include("header_ad.php");

 	if (isset($_POST['enviar'])) {
    $idempresa=$_POST['idempresa'];
    $idmunicipio=$_POST['idmunicipio'];
    $idobras=$_POST['idobras'];
    $numero_folio=$_POST['numero_folio'];
    $fecha=$_POST['fecha'];
    $concepto=$_POST['concepto'];
    $monto=$_POST['monto'];
   	$referencia_obervacion=$_POST['referencia_obervacion'];
   	$iot="ingreso";

   	echo $numero_folio;
    echo " 
        <center>
        <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
        <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
        </center>"; 

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO cuentas_fiscales(idcuentas_fiscales,idempresa,idmunicipio,idobras,fecha,concepto,monto,referencia_obervacion,numero_folio,iot) VALUES (?,?,?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('iiiissssss', $idcuentas_fiscales,$idempresa,$idmunicipio,$idobras,$fecha,$concepto,$monto,$referencia_obervacion,$numero_folio,$iot);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
  if ($insert_stmt = $mysqli->prepare("INSERT INTO cuentamayor(idcuentamayor,idempresa,fecha,concepto,referencia_obervacion,monto,numero_folio,iot) VALUES (?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('iissssss', $idcuentamayor,$idempresa,$fecha,$concepto,$referencia_obervacion,$monto,$numero_folio,$iot);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
   
    
}

	






	include("footer_ad.php");
?>