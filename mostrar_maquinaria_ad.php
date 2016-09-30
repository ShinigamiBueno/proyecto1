<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <center>
     <font size="8">MOSTRAR MAQUINARIA</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_maquinaria.php"> 
              <td>
                <h3>Buscar Maquinaria</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
           <td width="145" align="center">Descargar<a href="reporte_maquinaria_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
           <td><strong>EXCEL</strong></td>
          <td align="center"><a href="reporte_excel_maquinaria.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
        $query="SELECT idmaquinaria,modelo_maquinaria,num_serie_maquinaria,marca_maquinaria,tipo_combustible_maquinaria,capacidad_litros_maquinaria,filtro_diesel_maquinaria,filtro_trampa_maquinaria,filtro_hidraulico_maquinaria,filtro_aceite_maquinaria,  filtro_aire_maquinaria,llanta_trasera_maquinaria,llanta_delantera_maquinaria,tipo_aceite_maquinaria,clave_maquinaria  FROM maquinaria";
        $resultado=$mysqli->query($query);
      ?>  
      <center>
        <table border=1 width="800">
          <thead>
            <tr >
                <th bgcolor="khaki">Clave Maquinaria</th>
               <th bgcolor="khaki">Modelo Maquinaria</th>
               <th bgcolor="khaki">Número de Serie</th>
               <th bgcolor="khaki">Marca</th>
               <th bgcolor="khaki">Tipo Combustible</th>
               <th bgcolor="khaki">Capacidad Litros</th>
               <th bgcolor="khaki">Filro Diesel</th>
               <th bgcolor="khaki">Filro Trampa</th>
               <th bgcolor="khaki">Filro Hidráulico</th>
               <th bgcolor="khaki">Filro Aceite</th>
               <th bgcolor="khaki">Filro Aire</th>
               <th bgcolor="khaki">Llanta Trasera</th>
               <th bgcolor="khaki">Llanta Delantera</th>
               <th bgcolor="khaki">Tipo Aceite</th>
               <th bgcolor="khaki">Modificar</th>
               <th bgcolor="khaki">Eliminar</th>
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['clave_maquinaria'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['modelo_maquinaria'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['num_serie_maquinaria'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['marca_maquinaria'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['tipo_combustible_maquinaria'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['capacidad_litros_maquinaria'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['filtro_diesel_maquinaria'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['filtro_trampa_maquinaria'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['filtro_hidraulico_maquinaria'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['filtro_aceite_maquinaria'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['filtro_aire_maquinaria'].'</td>';
                  echo '<td bgcolor="">'.$filas['llanta_trasera_maquinaria'].'</td>';
                  echo '<td bgcolor="">'.$filas['llanta_delantera_maquinaria'].'</td>';
                  echo '<td bgcolor="">'.$filas['tipo_aceite_maquinaria'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_maquinaria.php?idmaquinaria='.$filas['idmaquinaria'].'">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_maquinaria.php?idmaquinaria='.$filas['idmaquinaria'].'">Eliminar</a>
                      </td>';
                  echo '</tr>';
                }
              ?>
<?php include("footer_ad.php") ?>