<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idrepresentantes_legales=$_GET['idrepresentantes_legales'];
	
	$query="DELETE FROM representantes_legales WHERE idrepresentantes_legales='$idrepresentantes_legales'";
	
	$resultado=$mysqli->query($query);
	
?>
<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Eliminar Cliente</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Cliente Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Cliente</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrardatosclientes_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

<?php include("footer_ad.php") ?>