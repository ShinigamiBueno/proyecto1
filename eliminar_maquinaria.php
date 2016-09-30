<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idmaquinaria=$_GET['idmaquinaria'];
	
	$query="DELETE FROM maquinaria WHERE idmaquinaria='$idmaquinaria'";
	
	$resultado=$mysqli->query($query);
	
?>
<?php include("header_ad.php") ?>

<html>
	<head>
		<title>Eliminar Maquinaria</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Maquinaria Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrar_maquinaria_ad.php">Regresar</a>
			
		</center>
	</body>
</html>
<?php include("footer_ad.php") ?>