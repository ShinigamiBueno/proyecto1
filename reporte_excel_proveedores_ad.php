<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Proveedores.xls");

       require_once("dompdf/dompdf_config.inc.php");
    

    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE PROVEEDORES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE DE PROVEEDORES</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Número</strong></td>
    <td><strong>Nombre Constructora</strong></td>
    <td><strong>RFC</strong></td>
    <td><strong>Domicilio</strong></td>
    <td><strong>Número de Cuenta</strong></td>
    <td><strong>Clabe Interbancaria</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Banco</strong></td> 
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from proveedores");
while($res=mysqli_fetch_array($sql)){
    $idbanco=$res['idbanco'];
    $idproveedores=$res["idproveedores"];
    $nombre_constructora_proveedores=$res["nombre_constructora_proveedores"];
    $rfc_proveedores=$res["rfc_proveedores"];
    $domicilio_proveedores=$res["domicilio_proveedores"];
    $numero_cuenta_proveedores=$res["numero_cuenta_proveedores"];
    $clabe_interbancaria_proveedores=$res["clabe_interbancaria_proveedores"];
    $correo_proveedores=$res["correo_proveedores"];

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
	<td><?php echo $idproveedores; ?></td>
	<td><?php echo $nombre_constructora_proveedores; ?></td>
	<td><?php echo $rfc_proveedores; ?></td>
	<td><?php echo $domicilio_proveedores; ?></td>
	<td><?php echo $numero_cuenta_proveedores; ?></td>
	<td><?php echo $clabe_interbancaria_proveedores; ?></td>
	<td><?php echo $correo_proveedores;?></td>
  <td><?php echo $tipo_banco;?></td>
  
	



	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>