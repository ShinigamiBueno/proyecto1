<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idobras=$_GET['idobras'];
	
	$query="SELECT nombre_obra, clave_obra,	jefe_construccion_obra,residente_obra,coordinador_obra,ubicacion,numero_contrato,descripcion FROM obras WHERE idobras='$idobras'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Obras</title>
	</head>
	<body>
		
		<center><h1>Modificar Obras</h1></center>
		
		<form name="modificar_obras" method="POST" action="mod_obras.php">
			<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idobras" value="<?php echo $idobras; ?>">
					<td width="20"><b>Nombre Obras</b></td>
					<td width="30"><div class="form-group"><input class="form-control" type="text" name="nombre_obra" size="25" value="<?php echo $row['nombre_obra']; ?>" /></div></td>
				</tr>	
				<tr>
					<td><b>Clave Obra</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="clave_obra" size="25" value="<?php echo $row['clave_obra']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Jefe de Construcción Obra</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="jefe_construccion_obra" size="25" value="<?php echo $row['jefe_construccion_obra']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Residente  Obra</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="residente_obra" size="25" value="<?php echo $row['residente_obra']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Coordinador Obra</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="coordinador_obra" size="25" value="<?php echo $row['coordinador_obra']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Ubicación</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="ubicacion" size="25" value="<?php echo $row['ubicacion'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Número Contrato<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="numero_contrato" size="25" value="<?php echo $row['numero_contrato'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Descripción<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="descripcion" size="25" value="<?php echo $row['descripcion']; ?>"/></div></td>
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

