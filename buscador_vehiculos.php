 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM vehiculos WHERE clave_vehiculo LIKE '%".$busca."%' OR modelo_vehiculo LIKE '%".$busca."%' OR marca_vehiculo LIKE '%".$busca."%' OR placas_vehiculo LIKE '%".$busca."%' OR tipo_combustible_vehiculo LIKE '%".$busca."%' OR capacidad_litros_vehiculo LIKE '%".$busca."%' OR tipo_filtro_vehiculo LIKE '%".$busca."%' ");




?>
<center>
     <font size="8">MOSTRAR VEHICULOS</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_vehiculos.php"> 
              <td>
                <h3>Buscar Vehiculos</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
             <td width="145" align="center">Descargar<a href="reporte_vehiculos_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
          <td><strong>EXCEL</strong></td>
          <td align="center"><a href="reporte_excel_vehiculo.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
             <th bgcolor="khaki">Clave Vehiculo</th>
              <th bgcolor="khaki">Modelo Vehiculo</th>
              <th bgcolor="khaki">Marca Vehiculo</th>
              <th bgcolor="khaki">Placas Vehiculos</th>
              <th bgcolor="khaki">Tipo Combustible</th>
              <th bgcolor="khaki">Capacidad Litros</th>
              <th bgcolor="khaki">Tipo Filtro</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
                echo '<td   bgcolor="skyblue" >'.$filas['clave_vehiculo'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['modelo_vehiculo'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['marca_vehiculo'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['placas_vehiculo'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['tipo_combustible_vehiculo'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['capacidad_litros_vehiculo'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['tipo_filtro_vehiculo'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_vehiculo.php?idvehiculo='.$filas['idvehiculo'].'">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_vehiculos.php?idvehiculo='.$filas['idvehiculo'].'">Eliminar</a>
                      </td>';         
echo '</tr>';

}

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
