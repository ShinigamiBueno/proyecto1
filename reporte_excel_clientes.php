
<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte Clientes.xls");

      require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE CLIENTES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <center>
    <td colspan="5" bgcolor="skyblue"><CENTER><strong>REPORTE CLIENTES</strong></td>
    </center>
  </tr>
  <tr bgcolor="">
    <td><strong>Clave Municipio</strong></td>
    <td><strong>Representante Legal</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Municipio</strong></td>




    
  </tr>
  
<?PHP
		
$sql=$mysqli->query("select * from representantes_legales");
	
while($res=mysqli_fetch_array($sql)){
	$idmunicipio=$res['idmunicipio'];
    $idrepresentantes_legales=$res["idrepresentantes_legales"];
    $representante_legal=$res["representante_legal"];
    $apellido_paterno_legal=$res["apellido_paterno_legal"];
    $apellido_materno_legal=$res["apellido_materno_legal"];	



  if ($stmt = $mysqli->prepare('SELECT municipio
                  FROM municipio WHERE idmunicipio = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idmunicipio);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($municipio);
                   $stmt->fetch();

                 }


        


	

						

?>  
 <tr>
	<td><?php echo $idrepresentantes_legales; ?></td>
	<td><?php echo $representante_legal; ?></td>
	<td><?php echo $apellido_paterno_legal; ?></td>
	<td><?php echo $apellido_materno_legal; ?></td>
	<td><?php echo $municipio; ?></td>
	                     
 </tr>

 
  
  <?php
}
  ?>
</table>
</body>
</html>