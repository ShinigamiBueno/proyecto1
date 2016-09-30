
<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Clientes.xls");

      require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HISTORIAL</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="5" bgcolor="skyblue"><CENTER><strong>HISTORIAL_BANCOS</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Número de Folio</strong></td>
    <td><strong>Fecha</strong></td>
    <td><strong>Concepto</strong></td>
    <td><strong>Monto</strong></td>
    <td><strong>Refefencia Observación</strong></td>
    <td><strong>Representante Empresa</strong></td>
    <td><strong>Banco</strong></td>




    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select numero_folio from cuentas_fiscales where iot='ingreso' ");
	
while($res=mysqli_fetch_array($sql)){
	//$idmunicipio=$res['idmunicipio'];
    
    $representante_legal=$res["numero_folio"];
   


 


        


	

						

?>  
 <tr>
	<td><?php echo $numero_folio; ?></td>
	
	                     
 </tr>

 
  
  <?php
}
  ?>
</table>
</body>
</html>