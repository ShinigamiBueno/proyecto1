<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idvehiculo=$_GET['idvehiculo'];
	$query="DELETE FROM vehiculos WHERE idvehiculo='$idvehiculo'";
	$resultado=$mysqli->query($query);
	
?>

<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Eliminar Vehiculos</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Vehiculo Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrar_vehiculos_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

<?php include("footer_ad.php") ?>