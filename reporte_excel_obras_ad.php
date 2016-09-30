<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Obras.xls");

      require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE OBRAS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>REPORTE OBRAS</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
   <td><strong>Número</strong></td>
    <td><strong>Nombre obra</strong></td>
    <td><strong>Clave de la obra</strong></td>
    <td><strong>Jefe de Construcción</strong></td>
    <td><strong>Residente de Obra</strong></td>
    <td><strong>Coordinador Obra</strong></td>
    <td><strong>Ubicación</strong></td>
    <td><strong>Número de contrato</strong></td>
    <td><strong>Descripción</strong></td>
    

    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from obras");
while($res=mysqli_fetch_array($sql)){
    $idobras=$res["idobras"];
    $nombre_obra=$res["nombre_obra"];
    $clave_obra=$res["clave_obra"];
    $jefe_construccion_obra=$res['jefe_construccion_obra'];
    $residente_obra=$res['residente_obra'];
    $coordinador_obra=$res['coordinador_obra']; 
    $ubicacion=$res["ubicacion"];
    $numero_contrato=$res["numero_contrato"];
    $descripcion=$res["descripcion"];	


        


	

						

?>  
 <tr>
	<td><?php echo $idobras; ?></td>
	<td><?php echo $nombre_obra; ?></td>
	<td><?php echo $clave_obra; ?></td>
  <td><?php echo $jefe_construccion_obra; ?></td>
  <td><?php echo $residente_obra; ?></td>
  <td><?php echo $coordinador_obra; ?></td>
	<td><?php echo $ubicacion; ?></td>
	<td><?php echo $numero_contrato; ?></td>
	<td><?php echo $descripcion; ?></td>

	



	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>