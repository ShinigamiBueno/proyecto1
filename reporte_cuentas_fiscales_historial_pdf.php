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
<title>REPORTE CLIENTES</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="7" bgcolor="skyblue"><CENTER><strong>REPORTE  CLIENTES</strong></CENTER></td>
  </tr>
  <tr bgcolor="">
    <td><strong>Número de Folio</strong></td>
    <td><strong>Fecha</strong></td>
    <td><strong>Concepto</strong></td>
    <td><strong>Monto</strong></td>
    <td><strong>Referencia Observación</strong></td>
    <td><strong>Representante Empresa</strong></td>
    <td><strong>Banco</strong></td>

  </tr>';
  


/*$sql=mysql_query("select municipio.municipio,representantes_legales.representantes_legales from representantes_legales inner join municipio on representantes_legales.idmunicipio=municipio.idmunicipio");*/

/*$sql=$mysqli->query("SELECT municipio.municipio,representantes_legales.municipio FROM municipio,representantes_legales WHERE municipio=idmunicipio,representantes_legales=idmunicipio");*/


$query="SELECT idcuentas_fiscales,numero_folio,fecha,concepto,monto,referencia_obervacion,idempresa FROM cuentas_fiscales where iot='ingreso'";
          $resultado=$mysqli->query($query);

//$sql=$mysqli->query("SELECT municipio.idmunicipio,municipio,representantes_legales.idrepresentantes_legales ,representante_legal FROM municipio,representantes_legales where municipio.idmunicipio=representantes_legales.idmunicipio"); 
  
while($res=mysqli_fetch_array($resultado)){
   $idempresa=$res['idempresa'];
$codigoHTML.='  

  <tr>
    
    

    <td>'.$res['numero_folio'].'</td>
    <td>'.$res['fecha'].'</td>
    <td>'.$res['concepto'].'</td>
    <td>'.$res['monto'].'</td>
    <td>'.$res['referencia_obervacion'].'</td>
    
';

    
  
  if ($stmt = $mysqli->prepare('SELECT representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,idbanco
                  FROM empresa WHERE idempresa = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idempresa);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($representante_empresa,$apellido_paterno_empresa,$apellido_materno_empresa,$idbanco);
                   $stmt->fetch();

                 }

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
     <td>'.$representante_empresa.'  '.$apellido_paterno_empresa.' '.$apellido_materno_empresa.'</td>
      <td>'.$tipo_banco.'  </td>





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
$dompdf->stream("Reporte Clientes.pdf");
?>