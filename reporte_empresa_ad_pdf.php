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
<title>REPORTE EMPRESAS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="12" bgcolor="skyblue"><CENTER><strong>REPORTE EMPRESAS</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
    <td><strong>Número</strong></td>
    <td><strong>Nombre Nombre constructora</strong></td>
    <td><strong>Clave empresa</strong></td>
    <td><strong>Codigo Postal</strong></td>
    <td><strong>RFC</strong></td>
    <td><strong>Número Interior</strong></td>
    <td><strong>Número Exterior</strong></td>
    <td><strong>Domicilio</strong></td>
    <td><strong>Número Cuenta</strong></td>
    <td><strong>Clabe Interbancaria</strong></td>
    <td><strong>Correo</strong></td>
    <td><strong>Banco</strong></td>
    
  </tr>';
  


$sql=$mysqli->query("select * from empresa");
while($res=mysqli_fetch_array($sql)){
	$idbanco=$res['idbanco'];
$codigoHTML.='	

	<tr>
	    <td>'.$res['idempresa'].'</td>
		<td>'.$res['nombre_constructora'].'</td>
		<td>'.$res['clave_empresa'].'</td>
		<td>'.$res['codigo_postal_empresa'].'</td>
		<td>'.$res['rfc'].'</td>
		<td>'.$res['numero_interior_empresa'].'</td>
		<td>'.$res['numero_exterior_empresa'].'</td>
		<td>'.$res['domicilio'].'</td>
		<td>'.$res['numero_cuenta'].'</td>
		<td>'.$res['clabe_interbancaria'].'</td>
		<td>'.$res['correo'].'</td>';


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
$dompdf->stream("Reporte_Empresa.pdf");
?>