<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

	
	$idrepresentantes_legales=$_GET['idrepresentantes_legales'];
	
	$query="SELECT representante_legal,apellido_paterno_legal,apellido_materno_legal FROM representantes_legales WHERE idrepresentantes_legales='$idrepresentantes_legales'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Representantes Legales</title>
	</head>
	<body>
		
		<center><h1>Modificar Representantes Legales</h1></center>
		
		<form name="modificar_clientes" method="POST" action="mod_clientes.php">
			<center>
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idrepresentantes_legales" value="<?php echo $idrepresentantes_legales; ?>">
					<td width="20"><b>Representantes Legales</b></td>
					<td width="30"><div class="form-group"><input class="form-control" type="text" name="representante_legal" size="25" value="<?php echo $row['representante_legal']; ?>" /></div></td>
				</tr>	
				<tr>
					<td><b>Apellido Paterno Legal</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_paterno_legal" size="25" value="<?php echo $row['apellido_paterno_legal']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Apellido Materno Legal</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_materno_legal" size="25" value="<?php echo $row['apellido_materno_legal']; ?>" /></div></td>
				</tr
				
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

