<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';




  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>

  
    <center>
     <font size="8">MOSTRAR OBRAS</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_obras.php"> 
              <td>
                <h3>Buscar OBRAS</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            
      <td width="145" align="center">Reporte Pdf<a href="reporte_obras_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
         <td width="145" align="center">Reporte Excel<a href="reporte_excel_obras_ad.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
         $query="SELECT idobras, nombre_obra, clave_obra, jefe_construccion_obra,residente_obra,coordinador_obra,ubicacion,numero_contrato, descripcion FROM obras";
        $resultado=$mysqli->query($query);
      ?>  
      <center>
        <table border=1 width="800">
          <thead>
            <tr >
             <th bgcolor="khaki">Nombre de la obra</th>
              <th bgcolor="khaki">Clave de la obra</th>
              <th  bgcolor="khaki">Jefe de Construcción Obra</th>
               <th  bgcolor="khaki">Residente de Obra</th>
               <th  bgcolor="khaki">Coordinador Obra</th>
              <th bgcolor="khaki">Ubicación</th>
              <th bgcolor="khaki">Número de contrato</th>
              <th bgcolor="khaki">Descripción</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['nombre_obra'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['clave_obra'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['jefe_construccion_obra'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['residente_obra'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['coordinador_obra'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['ubicacion'].'</td>';
                     echo '<td   bgcolor="skyblue" >'.$filas['numero_contrato'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['descripcion'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_obras.php?idobras='.$filas['idobras'].'" class="fa fa-pencil">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_obras.php?idobras='.$filas['idobras'].'" class="fa fa-trash-o " >Eliminar</a>
                      </td>';
                  echo '</tr>';
                }


              ?>
              
              



<?php include("footer_ad.php") ?>