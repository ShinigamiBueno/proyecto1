<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idvehiculo=$_GET['idvehiculo'];
	
	$query="SELECT clave_vehiculo,modelo_vehiculo,marca_vehiculo,placas_vehiculo,tipo_combustible_vehiculo,capacidad_litros_vehiculo,capacidad_litros_vehiculo,tipo_filtro_vehiculo FROM vehiculos WHERE idvehiculo='$idvehiculo'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	

?>
<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>s



<html>
	<head>
		<title>Vehiculos</title>
	</head>
	<body>
		
		<center><h1>Modificar Vehiculo</h1></center>
		
		<form name="modificar_obras" method="POST" action="mod_vehiculo.php">
			<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idvehiculo" value="<?php echo $idvehiculo; ?>">
					<td width="20"><b>Clave Vehiculo</b></td>
					<td width="30"><div class="form-group"><input class="form-control" type="text" name="clave_vehiculo" size="25" value="<?php echo $row['clave_vehiculo']; ?>" /></div></td>
				</tr>	
				<tr>
					<td><b>Modelo Vehiculo</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="modelo_vehiculo" size="25" value="<?php echo $row['modelo_vehiculo']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Marca Vehiculo</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="marca_vehiculo" size="25" value="<?php echo $row['marca_vehiculo'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Placas Vehiculo<b></td>
					<td><div class="form-group"><input  class="form-control" type="text" name="placas_vehiculo" size="25" value="<?php echo $row['placas_vehiculo'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Tipo Combustible Vehiculo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="tipo_combustible_vehiculo" size="25" value="<?php echo $row['tipo_combustible_vehiculo']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Capacidad Litros Vehiculo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="capacidad_litros_vehiculo" size="25" value="<?php echo $row['capacidad_litros_vehiculo']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Tipo Filtro Vehiculo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="tipo_filtro_vehiculo" size="25" value="<?php echo $row['tipo_filtro_vehiculo']; ?>"/></div></td>
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
