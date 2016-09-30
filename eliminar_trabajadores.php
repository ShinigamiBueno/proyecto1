<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idtrabajador=$_GET['idtrabajador'];
	
	$query="DELETE FROM trabajadores WHERE idtrabajador='$idtrabajador'";
	
	$resultado=$mysqli->query($query);
	
?>

<?php include("header_ad.php") ?>

<html>
	<head>
		<title>Eliminar Trabajadores</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Trabajador Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="mostrar_trabajadores_ad.php">Regresar</a>
			
		</center>
	</body>
</html>



</html>
<?php include("footer_ad.php") ?>