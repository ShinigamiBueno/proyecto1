<?php
include_once 'includes/db_connect.php';
 


if(isset($_POST['enviar'])){
  //Aquí están las variables de la tabla empresa
  $idmunicipio=$_POST['idmunicipio'];
  $idempresa=$_POST['idempresa'];
  $idobras=$_POST['idobras'];
  $idrepresentantes_legales=$_POST['idrepresentantes_legales'];
  $monto=$_POST['monto'];
  $factura_proyectos=$_POST['factura_proyectos'];
  $status="Activo";
 echo $idmunicipio;
  echo $idempresa;
  echo $idobras;
  echo $idrepresentantes_legales;
  echo $monto;
  echo $factura_proyectos;
  echo "Hola";
     //Aquí está la inser into de la tabla empresa 
  if ($insert_stmt = $mysqli->prepare("INSERT INTO proyectos(idmunicipio,idempresa,idobras,idrepresentantes_legales,monto,saldo,factura_proyectos,status) VALUES (?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('iiiissss',$idmunicipio,$idempresa,$idobras,$idrepresentantes_legales,$monto,$monto,$factura_proyectos,$status);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        //echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    } 
  }
  
 
  

}



?>