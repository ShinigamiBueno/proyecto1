<?php

    require_once("dompdf/dompdf_config.inc.php");
    

    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE PROVEEDORES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="skyblue"><CENTER><strong>REPORTE PROVEEDORES</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
    <td><strong>Número</strong></td>
    <td><strong>Nombre constructora</strong></td>
    <td><strong>RFC</strong></td>
    <td><strong>Domicilio</strong></td>
    <td><strong>Número de Cuenta</strong></td>
    <td><strong>Clabe Interbancaria</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Banco</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from proveedores");
while($res=mysqli_fetch_array($sql)){
  $idbanco=$res['idbanco'];
$codigoHTML.='  

  <tr>
      <td>'.$res['idproveedores'].'</td>
    <td>'.$res['nombre_constructora_proveedores'].'</td>
    <td>'.$res['rfc_proveedores'].'</td>
    <td>'.$res['domicilio_proveedores'].'</td>
    <td>'.$res['numero_cuenta_proveedores'].'</td>
    <td>'.$res['clabe_interbancaria_proveedores'].'</td>
    <td>'.$res['correo_proveedores'].'</td>';


    if ($stmt = $mysqli->prepare('SELECT tipo_banco
                  FROM banco WHERE idbanco = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idbanco);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($tipo_banco);
                   $stmt->fetch();

                 }
      $codigoHTML.=' 
     <td>'.$tipo_banco.'</td>
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
$dompdf->stream("Reporte Proveedores.pdf");
?>