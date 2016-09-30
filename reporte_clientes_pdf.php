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
    <td colspan="5" bgcolor="skyblue"><CENTER><strong>REPORTE  CLIENTES</strong></CENTER></td>
  </tr>
  <tr bgcolor="">
    <td><strong>Clave Municipio</strong></td>
    <td><strong>Representante Legal</strong></td>
    <td><strong>Apellido Paterno</strong></td>
    <td><strong>Apellido Materno</strong></td>
    <td><strong>Municipio</strong></td>

  </tr>';
  


/*$sql=mysql_query("select municipio.municipio,representantes_legales.representantes_legales from representantes_legales inner join municipio on representantes_legales.idmunicipio=municipio.idmunicipio");*/

/*$sql=$mysqli->query("SELECT municipio.municipio,representantes_legales.municipio FROM municipio,representantes_legales WHERE municipio=idmunicipio,representantes_legales=idmunicipio");*/


$query="SELECT idrepresentantes_legales,representante_legal,apellido_paterno_legal,
         apellido_materno_legal,idmunicipio FROM representantes_legales";
          $resultado=$mysqli->query($query);

//$sql=$mysqli->query("SELECT municipio.idmunicipio,municipio,representantes_legales.idrepresentantes_legales ,representante_legal FROM municipio,representantes_legales where municipio.idmunicipio=representantes_legales.idmunicipio"); 
  
while($res=mysqli_fetch_array($resultado)){
   $idmunicipio=$res['idmunicipio'];
$codigoHTML.='  

  <tr>
    <td>'.$res['idrepresentantes_legales'].'</td>
    <td>'.$res['representante_legal'].'</td>
    <td>'.$res['apellido_paterno_legal'].'</td>
    <td>'.$res['apellido_materno_legal'].'</td>';
    

    
  
  if ($stmt = $mysqli->prepare('SELECT municipio
                  FROM municipio WHERE idmunicipio = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idmunicipio);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($municipio);
                   $stmt->fetch();

                 }
      $codigoHTML.=' 
     <td>'.$municipio.'</td>
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