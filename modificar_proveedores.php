<?php
	include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
	
	$idproveedores=$_GET['idproveedores'];
	
	$query="SELECT idbanco,nombre_constructora_proveedores,rfc_proveedores,domicilio_proveedores,numero_cuenta_proveedores,clabe_interbancaria_proveedores,correo_proveedores FROM proveedores WHERE idproveedores='$idproveedores'";
	
	$resultado=$mysqli->query($query);
	$row=$resultado->fetch_assoc();
	
?>
	<?php 
		$page_title="Constructora";?>
	<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Proveedores</title>
	</head>
	<body>
		<center><h1>Modificar Proveedores</h1></center>
		
		<form name="modificar_obras" method="POST" action="mod_proveedores.php">
		<center>
		   <tr>
			<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
		</tr>
		
			
			<table width="50%">
				<tr>
					<input type="hidden" name="idproveedores" value="<?php echo $idproveedores; ?>">
					<td width="20"><b>Nombre Constrcutora</b></td>
					<td width="30"><div class="form-group"><input  class="form-control" type="text" name="nombre_constructora_proveedores" size="25" value="<?php echo $row['nombre_constructora_proveedores']; ?>" /></div></td>
				</tr>	
				<tr>
					<td><b>RFC</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="rfc_proveedores" size="25" value="<?php echo $row['rfc_proveedores']; ?>" /></div></td>
				</tr>
				<tr>
					<td><b>Domicilio</b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="domicilio_proveedores" size="25" value="<?php echo $row['domicilio_proveedores'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Número de  Cuenta<b></td>
					<td><div class="form-group"><input type="text"  class="form-control" name="numero_cuenta_proveedores" size="25" value="<?php echo $row['numero_cuenta_proveedores'];?>"/></div></td>
				</tr>
				<tr>
					<td><b>Claba Interbancaria<b></td>
					<td><div class="form-group"><input  class="form-control" type="text" name="clabe_interbancaria_proveedores" size="25" value="<?php echo $row['clabe_interbancaria_proveedores']; ?>"/></div></td>
				</tr>
				<tr>
					<td><b>Correo<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="correo_proveedores" size="25" value="<?php echo $row['correo_proveedores']; ?>"/></div></td>
				</tr>
				<tr>
					<?php 
					$idbanco=$row['idbanco'];

					$query2="SELECT tipo_banco FROM banco WHERE idbanco='$idbanco'";

					$consulta=$mysqli->query($query2);
					 
					$row2=$consulta->fetch_assoc();
					
                 
                 ?>
                 



					<td><b>Bancos<b></td>
					<td><div class="form-group"><input class="form-control" type="text" name="idbanco" size="25" value="<?php echo $row2['tipo_banco']; ?>"/></div></td>
				</tr>

				
				
				
			</table>
		</form>
	</body>
</html>	
<?php include("footer_ad.php") ?>
