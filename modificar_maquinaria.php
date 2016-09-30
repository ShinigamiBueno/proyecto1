<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idmaquinaria=$_GET['idmaquinaria'];
	
	 $query="SELECT modelo_maquinaria,num_serie_maquinaria,marca_maquinaria,tipo_combustible_maquinaria,capacidad_litros_maquinaria,filtro_diesel_maquinaria,filtro_trampa_maquinaria,filtro_hidraulico_maquinaria,filtro_aceite_maquinaria,  filtro_aire_maquinaria,llanta_trasera_maquinaria,llanta_delantera_maquinaria,tipo_aceite_maquinaria,clave_maquinaria  FROM maquinaria WHERE idmaquinaria='$idmaquinaria'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	

?>
<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<html>
	<head>
		<title>Maquinaria</title>
	</head>
	<body>
		
		<center><h1>Modificar Maquinaria</h1></center>
		
		<form name="modificar_maquinaria" method="POST" action="mod_maquinaria.php">
			<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idmaquinaria" value="<?php echo $idmaquinaria ?>">
					<td width="20"><b>Clave Maquinaria</b></td>
					<td width="30"><div class="form-group"><input class="form-control" type="text" name="clave_maquinaria" size="25" value="<?php echo $row['clave_maquinaria']; ?>" /><div></td>
				</tr>	
				<tr>
					<td><b>Modelo Maquinaria</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="modelo_maquinaria" size="25" value="<?php echo $row['modelo_maquinaria']; ?>" /><div></td>
				</tr>
				<tr>
					<td><b>Numero serie Maquinaria</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="num_serie_maquinaria" size="25" value="<?php echo $row['num_serie_maquinaria'];?>"/><div></td>
				</tr>
				<tr>
					<td><b>Marca<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="marca_maquinaria" size="25" value="<?php echo $row['marca_maquinaria'];?>"/><div></td>
				</tr>
				<tr>
					<td><b>Tipo Combustible Maquinaria<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="tipo_combustible_maquinaria" size="25" value="<?php echo $row['tipo_combustible_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b>Capacidad Litros Maquinaria<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="capacidad_litros_maquinaria" size="25" value="<?php echo $row['capacidad_litros_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Diesel<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="filtro_diesel_maquinaria" size="25" value="<?php echo $row['filtro_diesel_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Trampa<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="filtro_trampa_maquinaria" size="25" value="<?php echo $row['filtro_trampa_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Hidráulico<b></td>
					<td><div class="form-group"><input class="form-control"  type="text" name="filtro_hidraulico_maquinaria" size="25" value="<?php echo $row['filtro_hidraulico_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Aceite<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="filtro_aceite_maquinaria" size="25" value="<?php echo $row['filtro_aceite_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Aceite<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="filtro_aceite_maquinaria" size="25" value="<?php echo $row['filtro_aceite_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b> Filtro Aire<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="filtro_aire_maquinaria" size="25" value="<?php echo $row['filtro_aire_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b>Llanta Trasera<b></td>
					<td><input class="form-control" type="text" name="llanta_trasera_maquinaria" size="25" value="<?php echo $row['llanta_trasera_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b>Llanta Delatera<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="llanta_delantera_maquinaria" size="25" value="<?php echo $row['llanta_delantera_maquinaria']; ?>"/><div></td>
				</tr>
				<tr>
					<td><b>Tipo Aceite<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="tipo_aceite_maquinaria" size="25" value="<?php echo $row['tipo_aceite_maquinaria']; ?>"/><div></td>
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
