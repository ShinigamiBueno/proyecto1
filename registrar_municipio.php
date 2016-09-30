<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	$page_title="Constructora";
	include("header_ad.php");
	$municipio=$_POST['municipio'];
	$sql= $mysqli->query("SELECT * FROM municipio where municipio='$municipio'");
	if (mysqli_num_rows($sql)>0) {
		echo " 
		<center>
		<font size=30>YA ESTA REGISTRADO</font>
		<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
		</center>"; 
	}
	else{
		echo
		"	<center>
			<font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
			<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p>
			</center>";
		if(isset($_POST['enviar'])){
    		if ($insert3_stmt3=$mysqli->prepare("INSERT INTO municipio (idmunicipio,municipio)VALUES(?,?)")) {
				$insert3_stmt3->bind_param('is',$idmunicipio,$municipio);
        		if (! $insert3_stmt3->execute()) {

		    		echo '

		    		<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
				}
			}
	  	}
}
 include("footer_ad.php");
?>