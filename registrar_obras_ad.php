<?php
include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

    $page_title="Constructora";
    include("header_ad.php");

if (isset($_POST['enviar'])) {
    $nombre_obra=$_POST['nombre_obra'];
    $clave_obra=$_POST['clave_obra'];
    $jefe_construccion_obra=$_POST['jefe_construccion_obra'];
    $residente_obra=$_POST['residente_obra'];
    $coordinador_obra=$_POST['coordinador_obra'];
    $ubicacion=$_POST['ubicacion'];
    $numero_contrato=$_POST['numero_contrato'];
    $descripcion=$_POST['descripcion'];
    $idempresa=$_POST['idempresa'];
    $idmunicipio=$_POST['idmunicipio'];

    echo " 
        <center>
        <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
        <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
        </center>"; 

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO obras(idobras,idempresa,idmunicipio,nombre_obra,clave_obra,jefe_construccion_obra,residente_obra,coordinador_obra,ubicacion,numero_contrato,descripcion) VALUES (?,?,?,?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('iiissssssss', $idobras,$idempresa,$idmunicipio,$nombre_obra,$clave_obra,$jefe_construccion_obra,$residente_obra,$coordinador_obra,$ubicacion,$numero_contrato,$descripcion);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
include("footer_ad.php");
?>