<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idrepresentantes_legales=$_POST['idrepresentantes_legales'];
	//$idmunicipio=$_POST['idmunicipio'];
	$representante_legal=$_POST['representante_legal'];
	$apellido_paterno_legal=$_POST['apellido_paterno_legal'];
	$apellido_materno_legal=$_POST['apellido_materno_legal'];

	
	
	$query="UPDATE representantes_legales SET representante_legal='$representante_legal',apellido_paterno_legal='$apellido_paterno_legal', apellido_materno_legal='$apellido_materno_legal' WHERE idrepresentantes_legales='$idrepresentantes_legales'";
	$resultado=$mysqli->query($query);
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modifica Clientes</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Felicidades</h1>
				<h1>Cliente Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Cliente</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrardatosclientes_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
<?php include("footer_ad.php") ?>
	
				