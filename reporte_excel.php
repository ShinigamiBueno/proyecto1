<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");

        require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","root","Therion1992");
		mysql_select_db("constructora",$conexion);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REQUISICIÓN OBRAS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>Número de Solicitud</strong></td>
    <td><strong>Fecha de Formulación</strong></td>
    <td><strong>Fecha de Requerimiento</strong></td>
    <td><strong>Termino de Entrega</strong></td>
    <td><strong>Hora</strong></td>
    
  </tr>
  
<?PHP
		
$sql=mysql_query("select * from requisicion_obras");
while($res=mysql_fetch_array($sql)){		

	$requisicion_obra_No_solicitud=$res["requisicion_obra_No_solicitud"];
	$requisicion_fecha_formulacion_obra=$res["requisicion_fecha_formulacion_obra"];
	$requisicion_fecha_requerimiento_obra=$res["requisicion_fecha_requerimiento_obra"];
	$requisicion_hora_obra=$res["requisicion_hora_obra"];
	$requisicion_termino_entrega_obra=$res["requisicion_termino_entrega_obra"];
						

?>  
 <tr>
	<td><?php echo $requisicion_obra_No_solicitud; ?></td>
	<td><?php echo $requisicion_fecha_formulacion_obra; ?></td>
	<td><?php echo $requisicion_fecha_requerimiento_obra; ?></td>
	<td><?php echo $requisicion_hora_obra; ?></td>
	<td><?php echo $requisicion_termino_entrega_obra; ?></td>
	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>