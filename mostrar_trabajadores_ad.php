<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <center>
     <font size="8">MOSTRAR TRABAJADORES</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_trabajadores.php"> 
              <td>
                <h3>Buscar Trabajadores</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            <td width="145" align="center">Reporte Pdf<a href="reporte_trabajadores_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
             <td><strong>Reporte Excel</strong></td>
            <td align="center"><a href="reporte_excel_trabajadores.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
         $query="SELECT idtrabajador,clave_trabajador,nombre_trabajador,apellido_paterno_trabajador,apellido_materno_trabajador,curp_trabajador,direccion_trabajador,colonia_trabajador,municipio_trabajador,estado_trabajador,codigo_postal_trabajador,telefono_trabajador, celular_trabajador,correo_trabajador,tipo_contrato_trabajador,sueldo_trabajador,puesto_trabajador,departamento_trabajador FROM trabajadores";
         $resultado=$mysqli->query($query);
       ?>
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
            <th bgcolor="khaki">Clave del Trabajador</th>
              <th bgcolor="khaki">Nombre Trabajador</th>
              <th bgcolor="khaki">Apellido Paterno</th>
              <th bgcolor="khaki">Apellido Materno</th>
              <th bgcolor="khaki">Curp</th>
              <th bgcolor="khaki">Dirección</th>
              <th bgcolor="khaki">Colonia</th>
              <th bgcolor="khaki">Municipio</th>
              <th bgcolor="khaki">Estado</th>
              <th bgcolor="khaki">Codigo Postal</th>
              <th bgcolor="khaki">Teléfono</th>
              <th bgcolor="khaki">Celular</th>
              <th bgcolor="khaki">Correo</th>
              <th bgcolor="khaki">Tipo Contrato</th>
              <th bgcolor="khaki">Sueldo</th>
              <th bgcolor="khaki">Puesto</th>
              <th bgcolor="khaki">Departamento</th>
             <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
 
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['clave_trabajador'].'</td>';
                   echo '<td bgcolor="pink">'.$filas['nombre_trabajador'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_paterno_trabajador'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_materno_trabajador'].'</td>';
                     echo '<td   bgcolor="skyblue" >'.$filas['curp_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['direccion_trabajador'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['colonia_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['municipio_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['estado_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['codigo_postal_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['telefono_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['celular_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['correo_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['tipo_contrato_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['sueldo_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['puesto_trabajador'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['departamento_trabajador'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_trabajadores.php?idtrabajador='.$filas['idtrabajador'].'">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_trabajadores.php?idtrabajador='.$filas['idtrabajador'].'">Eliminar</a>
                      </td>';
                  echo '</tr>';
                }
              ?>
          </table>



      </div>
  
</div>

<?php include("footer_ad.php") ?>