<?php

		require_once("dompdf/dompdf_config.inc.php");
		
		include_once 'includes/db_connect.php';
		include_once 'includes/functions.php';

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE OBRAS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" bgcolor="skyblue"><CENTER><strong>REPORTE OBRAS</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
    <td><strong>Número</strong></td>
    <td><strong>Nombre obra</strong></td>
    <td><strong>Clave de la obra</strong></td>
    <td><strong>Jefe de Construcción</strong></td>
    <td><strong>Residente de Obra</strong></td>
    <td><strong>Coordinador Obra</strong></td>
    <td><strong>Ubicación</strong></td>
    <td><strong>Número de contrato</strong></td>
    <td><strong>Descripción</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from obras");
while($res=mysqli_fetch_array($sql)){
$codigoHTML.='	

	<tr>
	    <td>'.$res['idobras'].'</td>
		<td>'.$res['nombre_obra'].'</td>
		<td>'.$res['clave_obra'].'</td>
		<td>'.$res['jefe_construccion_obra'].'</td>
		<td>'.$res['residente_obra'].'</td>
		<td>'.$res['coordinador_obra'].'</td>
		<td>'.$res['ubicacion'].'</td>
		<td>'.$res['numero_contrato'].'</td>
		<td>'.$res['descripcion'].'</td>
        

		
	</tr>';
  
}



$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
$dompdf->set_paper('c2','portrait');
ini_set("memory_limit","500M");
$dompdf->render();
$dompdf->stream("Reporte Obras.pdf");
?>