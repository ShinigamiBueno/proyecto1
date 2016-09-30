<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idproveedores=$_POST['idproveedores'];
	$nombre_constructora_proveedores=$_POST['nombre_constructora_proveedores'];
	$rfc_proveedores=$_POST['rfc_proveedores'];
	$domicilio_proveedores=$_POST['domicilio_proveedores'];
	$numero_cuenta_proveedores=$_POST['numero_cuenta_proveedores'];
	$clabe_interbancaria_proveedores=$_POST['clabe_interbancaria_proveedores'];
	$correo_proveedores=$_POST['correo_proveedores'];
	$idbanco=$_POST['idbanco'];
	   
	$query="UPDATE proveedores SET nombre_constructora_proveedores='$nombre_constructora_proveedores',rfc_proveedores='$rfc_proveedores',domicilio_proveedores='$domicilio_proveedores',numero_cuenta_proveedores='$numero_cuenta_proveedores',clabe_interbancaria_proveedores='$clabe_interbancaria_proveedores',correo_proveedores='$correo_proveedores',idbanco='$idbanco' WHERE idproveedores='$idproveedores'";

	
	$resultado=$mysqli->query($query);
	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>



<html>
	<head>
		<title>Modificar Proveedores</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Felicidades</h1>
				<h1>Proveedor Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Proveedor</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrarproveedores_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

<?php include("footer_ad.php") ?>
				

				