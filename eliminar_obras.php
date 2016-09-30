<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idobras=$_GET['idobras'];
	
	$query="DELETE FROM obras WHERE idobras='$idobras'";
	
	$resultado=$mysqli->query($query);
	
?>
<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Obra Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrarobras_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

<?php include("footer_ad.php") ?>