<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	$page_title="Constructora";
	include("header_ad.php");

	if(isset($_POST['enviar'])){
    $nombre_constructora=$_POST['nombre_constructora'];
    $clave_empresa=$_POST['clave_empresa'];
    $representante_empresa=$_POST['representante_empresa'];
	$apellido_paterno_empresa=$_POST['apellido_paterno_empresa'];
	$apellido_materno_empresa=$_POST['apellido_materno_empresa'];
	 $codigo_postal_empresa=$_POST['codigo_postal_empresa'];
	 $rfc=$_POST['rfc'];
	 $numero_interior_empresa=$_POST['numero_interior_empresa'];
	 $numero_exterior_empresa=$_POST['numero_exterior_empresa'];
	 $domicilio=$_POST['domicilio'];
	 $numero_cuenta=$_POST['numero_cuenta'];
	  $clabe_interbancaria=$_POST['clabe_interbancaria'];
	  $correo=$_POST['correo'];
	   $idbanco=$_POST['idbanco'];
  
 

    	echo " 
		<center>
		<font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
		</center>"; 

     //Aquí está la inser into de la tabla empresa 
	/*if ($insert_stmt = $mysqli->prepare("INSERT INTO empresa(idempresa,idbanco,nombre_constructora,clave_empresa,representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,numero_interior_empresa,numero_exterior_empresa,domicilio,numero_cuenta,clabe_interbancaria,codigo_postal_empresa,correo,rfc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('iisssssssssssss',$idempresa,$idbanco,$representante_empresa,$apellido_paterno_empresa,$apellido_materno_empresa,$nombre_constructora,$clave_empresa,$numero_interior_empresa,$numero_exterior_empresa,$domicilio,$numero_cuenta,$clabe_interbancaria,$codigo_postal_empresa,$correo,$rfc);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}	
	}*/	

	if ($insert_stmt = $mysqli->prepare("INSERT INTO empresa(idempresa,nombre_constructora,clave_empresa,representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,codigo_postal_empresa,rfc,numero_interior_empresa,numero_exterior_empresa,domicilio,numero_cuenta,clabe_interbancaria,correo,idbanco) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('isssssssssssssi',$idempresa,$nombre_constructora,$clave_empresa,$representante_empresa,$apellido_paterno_empresa,$apellido_materno_empresa,$codigo_postal_empresa,$rfc,$numero_interior_empresa,$numero_exterior_empresa,$domicilio,$numero_cuenta,$clabe_interbancaria,$correo,$idbanco);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}	
	}

}


include("footer_ad.php");
?>


























