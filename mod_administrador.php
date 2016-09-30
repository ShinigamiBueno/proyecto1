<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idusuario=$_POST['idusuario'];
	$nombre=$_POST['nombre'];
	$apellido_paterno=$_POST['apellido_paterno'];
	$apellido_materno=$_POST['apellido_materno'];
	$curp=$_POST['curp'];
	$estado=$_POST['estado'];
	$municipio=$_POST['municipio'];

	$query="UPDATE usuario SET nombre='$nombre',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',curp='$curp',estado='$estado',municipio='$municipio' WHERE idusuario='$idusuario'";
	$resultado=$mysqli->query($query);
	
?>

<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modificar Administradores</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				<h1>Felicidades</h1>
				<h1>Administrador Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Administrador</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostraradministradores_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
<?php include("footer_ad.php") ?>
	

				
				