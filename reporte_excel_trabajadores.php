<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Trabajadores.xls");
  
  require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE TRABAJADORES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="17" bgcolor="skyblue"><CENTER><strong>REPORTE TRABAJADORES</strong></CENTER></td>
  </tr>
  <tr bgcolor="">
    <td><strong>Clave</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Curp</strong></td>
    <td><strong>Dirección</strong></td>
    <td><strong>Colonia</strong></td>
    <td><strong>Municipio</strong></td>
    <td><strong>Estado</strong></td>
    <td><strong>Codigo Postal</strong></td>
    <td><strong>Teléfono</strong></td>
    <td><strong>Celular</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Tipo contrato</strong></td>
    <td><strong>Sueldo</strong></td>
    <td><strong>Puesto</strong></td>
    <td><strong>Departamento</strong></td>
    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from trabajadores");
while($res=mysqli_fetch_array($sql)){		

	$clave_trabajador=$res["clave_trabajador"];
	$nombre_trabajador=$res["nombre_trabajador"];
	$apellido_paterno_trabajador=$res["apellido_paterno_trabajador"];
	$apellido_materno_trabajador=$res["apellido_materno_trabajador"];
	$curp_trabajador=$res["curp_trabajador"];
	$direccion_trabajador=$res["direccion_trabajador"];
	$colonia_trabajador=$res["colonia_trabajador"];
	$municipio_trabajador=$res["municipio_trabajador"];
	$estado_trabajador=$res["estado_trabajador"];
	$codigo_postal_trabajador=$res["codigo_postal_trabajador"];
	$telefono_trabajador=$res["telefono_trabajador"];
	$celular_trabajador=$res["celular_trabajador"];
	$correo_trabajador=$res["correo_trabajador"];
	$tipo_contrato_trabajador=$res["tipo_contrato_trabajador"];
	$sueldo_trabajador=$res["sueldo_trabajador"];
	$puesto_trabajador=$res["puesto_trabajador"];
	$departamento_trabajador=$res["departamento_trabajador"];
	

	

						

?>  
 <tr>
	<td><?php echo $clave_trabajador; ?></td>
	<td><?php echo $nombre_trabajador; ?></td>
	<td><?php echo $apellido_paterno_trabajador; ?></td>
	<td><?php echo $apellido_materno_trabajador; ?></td>
	<td><?php echo $curp_trabajador; ?></td>
	<td><?php echo $direccion_trabajador; ?></td>
	<td><?php echo $colonia_trabajador; ?></td>
	<td><?php echo $municipio_trabajador; ?></td>
	<td><?php echo $estado_trabajador; ?></td>
	<td><?php echo $codigo_postal_trabajador; ?></td>
	<td><?php echo $telefono_trabajador; ?></td>
	<td><?php echo $celular_trabajador; ?></td>
	<td><?php echo $correo_trabajador; ?></td>
	<td><?php echo $tipo_contrato_trabajador; ?></td>
	<td><?php echo $sueldo_trabajador; ?></td>
	<td><?php echo $puesto_trabajador; ?></td>
	<td><?php echo $departamento_trabajador; ?></td>
	
	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>