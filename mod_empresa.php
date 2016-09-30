<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


  $idempresa=$_POST['idempresa'];
  $nombre_constructora=$_POST['nombre_constructora'];
  $clave_empresa=$_POST['clave_empresa'];
  $representante_empresa=$_POST['representante_empresa'];
  $apellido_paterno_empresa=$_POST['apellido_paterno_empresa'];
  $apellido_materno_empresa=$_POST['apellido_materno_empresa'];
  $codigo_postal_empresa=$_POST['codigo_postal_empresa'];
   $rfc=$_POST['rfc'];
  $numero_interior_empresa=$_POST['numero_interior_empresa'];
  $numero_exterior_empresa=$_POST['numero_exterior_empresa'];
  $domicilio=$_POST['domicilio'];
  $numero_cuenta=$_POST['numero_cuenta'];
  $clabe_interbancaria=$_POST['clabe_interbancaria'];
  $correo=$_POST['correo'];
	

	$query="UPDATE empresa SET nombre_constructora='$nombre_constructora',clave_empresa='$clave_empresa',representante_empresa='$representante_empresa',apellido_paterno_empresa='$apellido_paterno_empresa',apellido_materno_empresa='$apellido_materno_empresa',codigo_postal_empresa='$codigo_postal_empresa',rfc='$rfc',numero_interior_empresa='$numero_interior_empresa',numero_exterior_empresa='$numero_exterior_empresa',domicilio='$domicilio',numero_cuenta='$numero_cuenta',clabe_interbancaria='$clabe_interbancaria',correo='$correo' WHERE idempresa='$idempresa'";
	$resultado=$mysqli->query($query);
	
?>
	<?php 
		$page_title="Constructora";?>
	<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modificar Empresa</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Felicidadess</h1>
				<h1>Empresa Modificado</h1>
				<?php 	}else{ ?>
				<h1>Error al Modificar Empresa</h1>
				<?php	} ?>
			
			<p></p>	
			
			<a href="mostrarempresa_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
<?php include("footer_ad.php") ?>
				
				