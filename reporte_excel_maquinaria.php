<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Maquinaria.xls");
  require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE MAQUINARIA</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="14" bgcolor="skyblue"><CENTER><strong>REPORTE MAQUINARIA</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Clave Maquinaria</strong></td>
    <td><strong>Modelo Maquinaria</strong></td>
    <td><strong>Número Serie Maquínaria</strong></td>
    <td><strong>Marca Maquinaria</strong></td>
    <td><strong>Tipo Combustible Maquinaria</strong></td>
    <td><strong>Capacidad Litros Maquinaria</strong></td>
    <td><strong>Filtro Diesel Maquinaria</strong></td>
    <td><strong>Filtro Trampa Maquinaria</strong></td>
    <td><strong>Filtro Hidraulica Maquinaria</strong></td>
    <td><strong>Filtro de Aceite Maquinaria</strong></td>
    <td><strong>Filtro de Aire Maquinaria</strong></td>
    <td><strong>Llanta Trasera Maquinaria</strong></td>
    <td><strong>Llanta Delantera Maquinaria</strong></td>
    <td><strong>Tipo Aceite Maquinaria</strong></td>

    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from maquinaria");
while($res=mysqli_fetch_array($sql)){		

	$clave_maquinaria=$res["clave_maquinaria"];
	$modelo_maquinaria=$res["modelo_maquinaria"];
	$num_serie_maquinaria=$res["num_serie_maquinaria"];
	$marca_maquinaria=$res["marca_maquinaria"];
	$tipo_combustible_maquinaria=$res["tipo_combustible_maquinaria"];
	$capacidad_litros_maquinaria=$res["capacidad_litros_maquinaria"];
	$filtro_diesel_maquinaria=$res["filtro_diesel_maquinaria"];
	$filtro_trampa_maquinaria=$res["filtro_trampa_maquinaria"];
    $filtro_hidraulico_maquinaria=$res["filtro_hidraulico_maquinaria"];
    $filtro_aceite_maquinaria=$res["filtro_aceite_maquinaria"];
    $filtro_aire_maquinaria=$res["filtro_aire_maquinaria"];
    $llanta_trasera_maquinaria=$res["llanta_trasera_maquinaria"];
    $llanta_delantera_maquinaria=$res["llanta_delantera_maquinaria"];
    $tipo_aceite_maquinaria=$res["tipo_aceite_maquinaria"];


	

						

?>  
 <tr>
	<td><?php echo $clave_maquinaria; ?></td>
	<td><?php echo $modelo_maquinaria; ?></td>
	<td><?php echo $num_serie_maquinaria; ?></td>
	<td><?php echo $marca_maquinaria; ?></td>
	<td><?php echo $tipo_combustible_maquinaria; ?></td>
	<td><?php echo $capacidad_litros_maquinaria; ?></td>
	<td><?php echo $filtro_diesel_maquinaria;?></td>
	<td><?php echo $filtro_trampa_maquinaria;?></td>
	<td><?php echo $filtro_hidraulico_maquinaria;?></td>
	<td><?php echo $filtro_aceite_maquinaria;?></td>
	<td><?php echo $filtro_aire_maquinaria;?></td>
	<td><?php echo $llanta_delantera_maquinaria;?></td>
	<td><?php echo $llanta_trasera_maquinaria;?></td>
	<td><?php echo $tipo_aceite_maquinaria;?></td>




	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>