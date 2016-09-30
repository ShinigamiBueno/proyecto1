<?php

		require_once("dompdf/dompdf_config.inc.php");
		/*$conexion=mysqli_connect("localhost","root","");
		mysqli_select_db("constructora",$conexion);*/

		include_once 'includes/db_connect.php';
		include_once 'includes/functions.php';


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE ADMINISTRADORES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="skyblue"><CENTER><strong>REPORTE ADMINISTRADORES</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
      <td><strong>Número</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Curp</strong></td>
    <td><strong>Estado</strong></td>
    <td><strong>Municipio</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from usuario");
while($res=mysqli_fetch_array($sql)){
$codigoHTML.='	

	<tr>
	    <td>'.$res['idusuario'].'</td>
	    <td>'.$res['nombre'].'</td>
		<td>'.$res['apellido_paterno'].'</td>
		<td>'.$res['apellido_materno'].'</td>
		<td>'.$res['curp'].'</td>
		<td>'.$res['estado'].'</td>
		<td>'.$res['municipio'].'</td>

		
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
$dompdf->stream("Reporte Administradores.pdf");
?>