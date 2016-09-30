<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idtrabajador=$_GET['idtrabajador'];


	$query="SELECT clave_trabajador,nombre_trabajador,apellido_paterno_trabajador,apellido_materno_trabajador,curp_trabajador,direccion_trabajador,colonia_trabajador,municipio_trabajador,estado_trabajador,codigo_postal_trabajador,telefono_trabajador, celular_trabajador,correo_trabajador,tipo_contrato_trabajador,sueldo_trabajador,puesto_trabajador,departamento_trabajador FROM trabajadores WHERE idtrabajador=$idtrabajador";
	
	
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	

?>
<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>



<html>
	<head>
		<title>Trabajadores</title>
	</head>
	<body>
		
		<center><h1>Modificar Trabajadores</h1></center>
		
		<form name="modificar_trabajadores" method="POST" action="mod_trabajadores.php">
		<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idtrabajador" value="<?php echo $idtrabajador; ?>">
					<td width="20"><b>Clave Trabajador</b></td>
					<td width="30"><div class="form-group"><input class="form-control" type="text" name="clave_trabajador" size="25" value="<?php echo $row['clave_trabajador']; ?>" /></div></td>
				</tr>	
				<tr>
					<td><b>Nombre trabajador</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="nombre_trabajador" size="25" value="<?php echo $row['nombre_trabajador']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Apellido Paterno</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_paterno_trabajador" size="25" value="<?php echo $row['apellido_paterno_trabajador'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Apellido Materno<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_materno_trabajador" size="25" value="<?php echo $row['apellido_materno_trabajador'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Curp<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="curp_trabajador" size="25" value="<?php echo $row['curp_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Dirección<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="direccion_trabajador" size="25" value="<?php echo $row['direccion_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Colonia<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="colonia_trabajador" size="25" value="<?php echo $row['colonia_trabajador']; ?>"/></div></td>
				</tr>

				<tr>
					<td><b>Municipio<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="municipio_trabajador" size="25" value="<?php echo $row['municipio_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Estado<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="estado_trabajador" size="25" value="<?php echo $row['estado_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Codigo Postal<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="codigo_postal_trabajador" size="25" value="<?php echo $row['codigo_postal_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Teléfono<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="telefono_trabajador" size="25" value="<?php echo $row['telefono_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Celular<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="celular_trabajador" size="25" value="<?php echo $row['celular_trabajador']; ?>"/></div></td>
				</tr>
				
				<tr>
					<td><b>Correo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="correo_trabajador" size="25" value="<?php echo $row['correo_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Tipo Contrato<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="tipo_contrato_trabajador" size="25" value="<?php echo $row['tipo_contrato_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Sueldo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="sueldo_trabajador" size="25" value="<?php echo $row['sueldo_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Puesto<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="puesto_trabajador" size="25" value="<?php echo $row['puesto_trabajador']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Departamento<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="departamento_trabajador" size="25" value="<?php echo $row['departamento_trabajador']; ?>"/></div></td>
				</tr>
				
				
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	

</body>
</html>
<?php include("footer_ad.php") ?>
