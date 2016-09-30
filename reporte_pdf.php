<?php

		require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","root","Therion1992");
		mysql_select_db("constructora",$conexion);


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="5" bgcolor="skyblue"><CENTER><strong>REQUISICION OBRAS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>Número de Solicitud</strong></td>
    <td><strong>Fecha de Formulación</strong></td>
    <td><strong>Fecha de Requerimiento</strong></td>
    <td><strong>Hora</strong></td>
    <td><strong>Termino de entrega</strong></td>
  </tr>';
  


$sql=mysql_query("select * from requisicion_obras");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td>'.$res['requisicion_obra_No_solicitud'].'</td>
		<td>'.$res['requisicion_fecha_formulacion_obra'].'</td>
		<td>'.$res['requisicion_fecha_requerimiento_obra'].'</td>
		<td>'.$res['requisicion_hora_obra'].'</td>
		<td>'.$res['requisicion_termino_entrega_obra'].'</td>
												
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
$dompdf->set_paper("letter","landscape")
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");
?>