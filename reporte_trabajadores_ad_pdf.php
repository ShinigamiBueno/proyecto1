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
<title>REPORTE TRABAJADORES</title>
</head>
<body>
<table winth="%" border="1" cellspacing="" cellpadding="">
  <tr>
    <td colspan="18" bgcolor="skyblue"><CENTER><strong>REPORTE TRABAJADORES</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
    <td><strong>Número</strong></td>
    <td><strong>Clave</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Curp</strong></td>
    <td><strong>Direccion</strong></td>
    <td><strong>Colonia</strong></td>
    <td><strong>Municipio</strong></td>
    <td><strong>Estado</strong></td>
    <td><strong>Codigo Postal</strong></td>
    <td><strong>Telefono</strong></td>
    <td><strong>Celular</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Tipo Contrato</strong></td>
    <td><strong>Sueldo</strong></td>
    <td><strong>Puesto</strong></td>
    <td><strong>Departamento</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from trabajadores");
while($res=mysqli_fetch_array($sql)){
$codigoHTML.='	

	<tr>
	    <td>'.$res['idtrabajador'].'</td>
		<td>'.$res['clave_trabajador'].'</td>
		<td>'.$res['nombre_trabajador'].'</td>
		<td>'.$res['apellido_paterno_trabajador'].'</td>
		<td>'.$res['apellido_materno_trabajador'].'</td>
		<td>'.$res['curp_trabajador'].'</td>
		<td>'.$res['direccion_trabajador'].'</td>
		<td>'.$res['colonia_trabajador'].'</td>
		<td>'.$res['municipio_trabajador'].'</td>
		<td>'.$res['estado_trabajador'].'</td>
		<td>'.$res['codigo_postal_trabajador'].'</td>
		<td>'.$res['telefono_trabajador'].'</td>
		<td>'.$res['celular_trabajador'].'</td>
		<td>'.$res['correo_trabajador'].'</td>
		<td>'.$res['tipo_contrato_trabajador'].'</td>
		<td>'.$res['sueldo_trabajador'].'</td>
		<td>'.$res['puesto_trabajador'].'</td>
		<td>'.$res['departamento_trabajador'].'</td>

        

		
	</tr>';
  
}



$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
//para hacer lo Horizontal esta linea
//$dompdf->set_paper("letter","landscape");
//para hacer más chico en formato del pdf
$dompdf->set_paper('c2','portrait');
ini_set("memory_limit","500M");
$dompdf->render();
$dompdf->stream("Reporte trabajadores.pdf");
?>


