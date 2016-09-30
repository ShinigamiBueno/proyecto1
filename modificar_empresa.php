<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	$idempresa=$_GET['idempresa'];
	$query="SELECT nombre_constructora,clave_empresa,representante_empresa,	apellido_paterno_empresa,apellido_materno_empresa,codigo_postal_empresa,rfc,numero_interior_empresa,numero_exterior_empresa,domicilio,numero_cuenta,clabe_interbancaria,correo FROM empresa WHERE idempresa='$idempresa'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	

?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>




<html>
	<head>
		<title>Empresas</title>
	</head>
	<center>
	<body>
		
		<center><h1>Modificar Empresa</h1></center>
		
		<form  name="modificar_obras" method="POST" action="mod_empresa.php">
			  <center>
				    
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
					</center>
				</tr>
				
			<table width="50%">
			
			<tr>
                   
				 
					<input type="hidden" name="idempresa" value="<?php echo $idempresa; ?>">
                   
					<td width="20"><b>Nombre Constructora</b></td>
					<div class="form-group"><td width="30"><input class="form-control" type="text" name="nombre_constructora" size="25" value="<?php echo $row['nombre_constructora']; ?>" /></div></td>
					
				</tr>	
				<tr>
					<td><b>Clave Empresa</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="clave_empresa" size="25" value="<?php echo $row['clave_empresa']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Representante</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="representante_empresa" size="25" value="<?php echo $row['representante_empresa']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Apellido Paterno</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_paterno_empresa" size="25" value="<?php echo $row['apellido_paterno_empresa']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Apellido Materno</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="apellido_materno_empresa" size="25" value="<?php echo $row['apellido_materno_empresa']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Codigo Postal Empresa</b></td>
					<td><div class="form-group"><input class="form-control" 
					type="text" name="codigo_postal_empresa" size="25" value="<?php echo $row['codigo_postal_empresa'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>RFC<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="rfc" size="25" value="<?php echo $row['rfc'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Número Interior<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="numero_interior_empresa" size="25" value="<?php echo $row['numero_interior_empresa']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Número Exterior<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="numero_exterior_empresa" size="25" value="<?php echo $row['numero_exterior_empresa']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Domicilio<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="domicilio" size="25" value="<?php echo $row['domicilio']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Número Cuenta<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="numero_cuenta" size="25" value="<?php echo $row['numero_cuenta']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Clabe Interbancaria<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="clabe_interbancaria" size="25" value="<?php echo $row['clabe_interbancaria']; ?>"/></div></td>
				</tr>
					<tr>
					<td><b>Correo<b></td>
					<td><div><input class="form-control" type="text" name="correo" size="25" value="<?php echo $row['correo']; ?>"/></div></td>
				</tr>
				

			</table>
		</form>
	</body>
</html>	


</body>
</html>
<?php include("footer_ad.php") ?>