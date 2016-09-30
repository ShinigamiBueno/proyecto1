<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=REPORTE DE VEHICULOS.xls");

         require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
?>

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTES DE  VEHICULOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="7" bgcolor="skyblue"><CENTER><strong>REPORTE DE VEHICULOS</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Clave Vehiculo</strong></td>
    <td><strong>Modelo Vehiculo</strong></td>
    <td><strong>Marca Vehiculo</strong></td>
    <td><strong>Placas Vehiculo</strong></td>
    <td><strong>Tipo Combustible Vehiculo</strong></td>
    <td><strong>Capacidad Litros Vehiculo</strong></td>
    <td><strong>Tipo Filtro Vehiculo</strong></td>
    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from vehiculos");
while($res=mysqli_fetch_array($sql)){		

	$clave_vehiculo=$res["clave_vehiculo"];
	$modelo_vehiculo=$res["modelo_vehiculo"];
	$marca_vehiculo=$res["marca_vehiculo"];
	$placas_vehiculo=$res["placas_vehiculo"];
	$tipo_combustible_vehiculo=$res["tipo_combustible_vehiculo"];
	$capacidad_litros_vehiculo=$res["capacidad_litros_vehiculo"];
	$tipo_filtro_vehiculo=$res["tipo_filtro_vehiculo"];
						

?>  
 <tr>
	<td><?php echo $clave_vehiculo; ?></td>
	<td><?php echo $modelo_vehiculo; ?></td>
	<td><?php echo $marca_vehiculo; ?></td>
	<td><?php echo $placas_vehiculo; ?></td>
	<td><?php echo $tipo_combustible_vehiculo; ?></td>
	<td><?php echo $capacidad_litros_vehiculo; ?></td>
	<td><?php echo $tipo_filtro_vehiculo;?></td>
	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>