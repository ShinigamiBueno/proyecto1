<?php

   require_once("dompdf/dompdf_config.inc.php");
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REPORTE MAQUINARIA</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="14" bgcolor="skyblue"><CENTER><strong>REPORTE  MAQUINARIA</strong></CENTER></td>
  </tr>
  <tr bgcolor="khaki">
    <td><strong>Clave Maquinaria</strong></td>
    <td><strong>Modelo Maquinaria</strong></td>
    <td><strong>Numero de Serie</strong></td>
    <td><strong>Marca</strong></td>
    <td><strong>Tipo de Combustible</strong></td>
    <td><strong>Capacidad Litros</strong></td>
    <td><strong>Filtro Diesel</strong></td>
    <td><strong>Filtro Trampa</strong></td>
    <td><strong>Filtro Hidraulico</strong></td>
    <td><strong>Filtro Aceite</strong></td>
    <td><strong>Filtro Aire</strong></td>
    <td><strong>Llanta Trasera</strong></td>
    <td><strong>Llanta Delantera</strong></td>
    <td><strong>Tipo Aceite</strong></td>
  </tr>';
  


$sql=$mysqli->query("select * from maquinaria");
while($res=mysqli_fetch_array($sql)){
$codigoHTML.='  

  <tr>
      
    <td>'.$res['clave_maquinaria'].'</td>
    <td>'.$res['modelo_maquinaria'].'</td>
    <td>'.$res['num_serie_maquinaria'].'</td>
    <td>'.$res['marca_maquinaria'].'</td>
    <td>'.$res['tipo_combustible_maquinaria'].'</td>
    <td>'.$res['capacidad_litros_maquinaria'].'</td>
    <td>'.$res['filtro_diesel_maquinaria'].'</td>
    <td>'.$res['filtro_trampa_maquinaria'].'</td>
    <td>'.$res['filtro_hidraulico_maquinaria'].'</td>
    <td>'.$res['filtro_aceite_maquinaria'].'</td>
    <td>'.$res['filtro_aire_maquinaria'].'</td>
    <td>'.$res['llanta_trasera_maquinaria'].'</td>
    <td>'.$res['llanta_delantera_maquinaria'].'</td>
    <td>'.$res['tipo_aceite_maquinaria'].'</td>

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
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte Maquinaria.pdf");
?>