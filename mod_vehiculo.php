<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idvehiculo=$_POST['idvehiculo'];
	$clave_vehiculo=$_POST['clave_vehiculo'];
	$modelo_vehiculo=$_POST['modelo_vehiculo'];
	$marca_vehiculo=$_POST['marca_vehiculo'];
	$placas_vehiculo=$_POST['placas_vehiculo'];
	$tipo_combustible_vehiculo=$_POST['tipo_combustible_vehiculo'];
	$capacidad_litros_vehiculo=$_POST['capacidad_litros_vehiculo'];
	$tipo_filtro_vehiculo=$_POST['tipo_filtro_vehiculo'];
	
	
	$query="UPDATE vehiculos SET clave_vehiculo='$clave_vehiculo',modelo_vehiculo='$modelo_vehiculo', marca_vehiculo='$marca_vehiculo',placas_vehiculo='$placas_vehiculo',tipo_combustible_vehiculo='$tipo_combustible_vehiculo',capacidad_litros_vehiculo='$capacidad_litros_vehiculo',tipo_filtro_vehiculo='$tipo_filtro_vehiculo'  WHERE idvehiculo='$idvehiculo'";


	
	$resultado=$mysqli->query($query);
	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<html>
	<head>
		<title>Modificar Vehiculos</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				<h1>Felicidades</h1>
				<h1>Vehiculo Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Vehiculo</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrar_vehiculos_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
     



<?php include("footer_ad.php") ?>

				
				