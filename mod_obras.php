<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idobras=$_POST['idobras'];
	$nombre_obra=$_POST['nombre_obra'];
	$clave_obra=$_POST['clave_obra'];
	$jefe_construccion_obra=$_POST['jefe_construccion_obra'];
	$residente_obra=$_POST['residente_obra'];
	$coordinador_obra=$_POST['coordinador_obra'];
	$ubicacion=$_POST['ubicacion'];
	$numero_contrato=$_POST['numero_contrato'];
	$descripcion=$_POST['descripcion'];
	
	$query="UPDATE obras SET nombre_obra='$nombre_obra',clave_obra='$clave_obra',jefe_construccion_obra='$jefe_construccion_obra',residente_obra='$residente_obra',coordinador_obra='$coordinador_obra' ,ubicacion='$ubicacion',numero_contrato='$numero_contrato',descripcion='$descripcion'  WHERE idobras='$idobras'";
	$resultado=$mysqli->query($query);
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modificar Obras</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Felicidades</h1>
				<h1>Obra Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Obra</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrarobras_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
<?php include("footer_ad.php") ?>
	
				