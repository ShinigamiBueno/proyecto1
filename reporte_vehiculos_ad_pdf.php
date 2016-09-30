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
<title>REPORTE VEHICULOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE VEHICULOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
     <td><strong>Número</strong></td>
    <td><strong>Clave Vehiculo</strong></td>
    <td><strong>Modelo Vehiculo</strong></td>
    <td><strong>Marca</strong></td>
    <td><strong>Placas</strong></td>
    <td><strong>Tipo Combustible</strong></td>
    <td><strong>Capacidad Litros</strong></td>
    <td><strong>Tipo Filtro</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from vehiculos");
while($res=mysqli_fetch_array($sql)){
$codigoHTML.='	

	<tr>
	    <td>'.$res['idvehiculo'].'</td>
	    <td>'.$res['clave_vehiculo'].'</td>
	    <td>'.$res['modelo_vehiculo'].'</td>
	    <td>'.$res['marca_vehiculo'].'</td>
	    <td>'.$res['placas_vehiculo'].'</td>
	    <td>'.$res['tipo_combustible_vehiculo'].'</td>
	    <td>'.$res['capacidad_litros_vehiculo'].'</td>
		<td>'.$res['tipo_filtro_vehiculo'].'</td>	
		

		
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
$dompdf->stream("Reporte Vehiculos.pdf");
?>