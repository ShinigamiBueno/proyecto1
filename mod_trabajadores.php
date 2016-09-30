<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
	
	$idtrabajador=$_POST['idtrabajador'];
	$clave_trabajador=$_POST['clave_trabajador'];
    $nombre_trabajador=$_POST['nombre_trabajador'];
    $apellido_paterno_trabajador=$_POST['apellido_paterno_trabajador'];
    $apellido_materno_trabajador=$_POST['apellido_materno_trabajador'];
    $curp_trabajador=$_POST['curp_trabajador'];
    $direccion_trabajador=$_POST['direccion_trabajador'];
    $colonia_trabajador=$_POST['colonia_trabajador'];
    $municipio_trabajador=$_POST['municipio_trabajador'];
    $estado_trabajador=$_POST['estado_trabajador'];
    $codigo_postal_trabajador=$_POST['codigo_postal_trabajador'];
    $telefono_trabajador=$_POST['telefono_trabajador'];
    $celular_trabajador=$_POST['celular_trabajador'];
    $correo_trabajador=$_POST['correo_trabajador'];
    $tipo_contrato_trabajador=$_POST['tipo_contrato_trabajador'];
    $sueldo_trabajador=$_POST['sueldo_trabajador'];
    $puesto_trabajador=$_POST['puesto_trabajador'];
    $departamento_trabajador=$_POST['departamento_trabajador'];
    
	$query="UPDATE trabajadores SET clave_trabajador='$clave_trabajador',nombre_trabajador='$nombre_trabajador',apellido_paterno_trabajador='$apellido_paterno_trabajador',apellido_materno_trabajador='$apellido_materno_trabajador',curp_trabajador='$curp_trabajador',direccion_trabajador='$direccion_trabajador',colonia_trabajador='$colonia_trabajador',municipio_trabajador='$municipio_trabajador',estado_trabajador='$estado_trabajador',codigo_postal_trabajador='$codigo_postal_trabajador',telefono_trabajador='$telefono_trabajador', celular_trabajador='$celular_trabajador',correo_trabajador='$correo_trabajador',tipo_contrato_trabajador='$tipo_contrato_trabajador',sueldo_trabajador='$sueldo_trabajador',puesto_trabajador='$puesto_trabajador',departamento_trabajador='$departamento_trabajador' WHERE idtrabajador='$idtrabajador'";
	$resultado=$mysqli->query($query);
	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modificar Trabajadores</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				<h1>Felicidades</h1>
				<h1>Trabajador Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Trabajadores</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrar_trabajadores_ad.php">Regresar</a>
			
		</center>
	</body>
</html>

</body>
</html>
<?php include("footer_ad.php") ?>

				