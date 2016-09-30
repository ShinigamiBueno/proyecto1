<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Empresa.xls");

        require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE EMPRESAS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="12" bgcolor="skyblue"><CENTER><strong>REPORTE EMPRESA</strong></CENTER></td>
  </tr>
  <tr bgcolor="">

    <td><strong>Número</strong></td>
    <td><strong>Nombre Nombre constructora</strong></td>
    <td><strong>Clave empresa</strong></td>
    <td><strong>Codigo Postal</strong></td>
    <td><strong>RFC</strong></td>
    <td><strong>Número Interior</strong></td>
    <td><strong>Número Exterior</strong></td>
    <td><strong>Domicilio</strong></td>
    <td><strong>Número Cuenta</strong></td>
    <td><strong>Clabe Interbancaria</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Banco</strong></td>
    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from empresa");
while($res=mysqli_fetch_array($sql)){	
	$idbanco=$res['idbanco'];	

	$idempresa=$res["idempresa"];
	$nombre_constructora=$res["nombre_constructora"];
	$clave_empresa=$res["clave_empresa"];
	$codigo_postal_empresa=$res["codigo_postal_empresa"];
	$rfc=$res["rfc"];
	$numero_interior_empresa=$res["numero_interior_empresa"];
	$numero_exterior_empresa=$res["numero_exterior_empresa"];
	$domicilio=$res["domicilio"];
	$numero_cuenta=$res["numero_cuenta"];
	$clabe_interbancaria=$res["clabe_interbancaria"];
	$correo=$res["correo"];

	if ($stmt = $mysqli->prepare('SELECT tipo_banco
                  FROM banco WHERE idbanco = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idbanco);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($tipo_banco);
                   $stmt->fetch();

                 }
						

?>  
 <tr>
	<td><?php echo $idempresa; ?></td>
	<td><?php echo $nombre_constructora; ?></td>
	<td><?php echo $clave_empresa; ?></td>
	<td><?php echo $codigo_postal_empresa; ?></td>
	<td><?php echo $rfc; ?></td>
	<td><?php echo $numero_interior_empresa;?></td>
	<td><?php echo $numero_exterior_empresa;?></td>
	<td><?php echo $domicilio; ?></td>
	<td><?php echo $numero_cuenta; ?></td>
	<td><?php echo $clabe_interbancaria?></td>
	<td><?php echo $correo; ?></td>
	<td><?php echo $tipo_banco; ?></td>
	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>