<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idusuario=$_GET['idusuario'];
	$query="SELECT nombre,apellido_paterno,apellido_materno,curp,estado,municipio FROM usuario WHERE idusuario='$idusuario'";
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
		
		<center><h1>Modificar Administrador</h1></center>
		
		<form name="modificar_obras" method="POST" action="mod_administrador.php">
			<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
					<td width="20"><b>Nombre</b></td><div class="form-group">
					<td width="30"><input class="form-control" type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /><div></td>
				</tr>	
				<tr>
					<td><b>Apellido Paterno</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_paterno" size="25" value="<?php echo $row['apellido_paterno']; ?>" /><div></td>
				</tr>
				<tr>
					<td><b>Apellido Materno</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_materno" size="25" value="<?php echo $row['apellido_materno'];?>"/><div></td>
				</tr>
				<tr>
					<td><b>Curp<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="curp" size="25" value="<?php echo $row['curp'];?>"/><div></td>
				</tr>
				<tr>
					<td><b>Estado<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="estado" size="25" value="<?php echo $row['estado']; ?>"/><div></td>
				</tr>
					<tr>
					<td><b>Municipio<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="municipio" size="25" value="<?php echo $row['municipio']; ?>"/><div></td>
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
