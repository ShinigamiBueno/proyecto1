<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
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
      <?php   
        $query="SELECT idvehiculo,clave_vehiculo,modelo_vehiculo,marca_vehiculo,placas_vehiculo,tipo_combustible_vehiculo,capacidad_litros_vehiculo,tipo_filtro_vehiculo  FROM vehiculos";
        $resultado=$mysqli->query($query);
      ?>  
      <center>
        <table border=1 width="800">
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
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  echo '<tr>';
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
              ?>
<?php include("footer_ad.php") ?>