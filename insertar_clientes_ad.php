<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	$page_title="Constructora";
	include("header_ad.php");

	if(isset($_POST['enviar'])){
		$clave_municipio=$_POST['clave_municipio'];
		$representante_legal=$_POST['representante_legal'];
		$apellido_paterno_legal=$_POST['apellido_paterno_legal'];
		$apellido_materno_legal=$_POST['apellido_materno_legal'];
		$idmunicipio=$_POST['idmunicipio'];
    	
    	echo " 
		<center>
		<font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
		</center>"; 

    	if ($insertar1_stmt1=$mysqli->prepare("INSERT INTO claves_municipios(idclavemunicipio,clave_municipio)VALUES(?,?)")) {
    		  $insertar1_stmt1->bind_param('is',$idclavemunicipio,$clave_municipio);
    		if (!$insertar1_stmt1->execute()){
    		 	echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    		}
    	}

	//Aquí está donde se insertan los datos de la tabla representates_legales
		if ($insert2_stmt2= $mysqli->prepare("INSERT INTO representantes_legales(idrepresentantes_legales,idmunicipio,representante_legal,apellido_paterno_legal,apellido_materno_legal)VALUES(?,?,?,?,?) ")) {
       		 $insert2_stmt2->bind_param('iisss',$idrepresentantes_legales,$idmunicipio,$representante_legal,$apellido_paterno_legal,$apellido_materno_legal);

       		 if (! $insert2_stmt2->execute()) {
		    	echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT2. "</script>';
			}
		}



		



}



include("footer_ad.php");





?>
