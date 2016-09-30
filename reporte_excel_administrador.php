<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Administrador .xls");

        require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE ADMINISTRADORES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE ADMINISTRADORES</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Nombre</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Curp</strong></td>
    <td><strong>Estado</strong></td>
    <td><strong>Municipio</strong></td>

    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from usuario");
while($res=mysqli_fetch_array($sql)){
    $idusuario=$res["idusuario"];
    $nombre=$res["nombre"];
    $apellido_paterno=$res["apellido_paterno"];
    $apellido_materno=$res["apellido_materno"];
    $curp=$res["curp"];
    $estado=$res["estado"];	


        


	

						

?>  
 <tr>
	<td><?php echo $idusuario; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $apellido_paterno; ?></td>
	<td><?php echo $apellido_materno; ?></td>
	<td><?php echo $curp; ?></td>
	<td><?php echo $estado; ?></td>

	



	                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>