<?php 
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';
	
	$idempresa=$_GET['idempresa'];
	$query="DELETE FROM empresa WHERE idempresa='$idempresa'";
	$resultado=$mysqli->query($query);
	
?>


<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>





<html>
	<head>
		<title>Eliminar empresa</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Empresa Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h3>Error al Eliminar Empresa</h3>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrarempresa_ad.php">Regresar</a>
			
		</center>
	</body>
</html>
</body>
</html>
    



<?php include("footer_ad.php") ?>