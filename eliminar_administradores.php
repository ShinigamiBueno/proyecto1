<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idusuario=$_GET['idusuario'];
	
	$query="DELETE FROM usuario WHERE idusuario='$idusuario'";
	
	$resultado=$mysqli->query($query);
	
?>

<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Eliminar Administrador</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Administrador Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Administrador</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostraradministradores_ad.php">Regresar</a>
			
		</center>
	</body>
</html>
<?php include("footer_ad.php") ?>