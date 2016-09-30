 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM trabajadores WHERE clave_trabajador LIKE '%".$busca."%' OR nombre_trabajador LIKE '%".$busca."%' OR apellido_paterno_trabajador LIKE '%".$busca."%' OR apellido_materno_trabajador LIKE '%".$busca."%' OR curp_trabajador LIKE '%".$busca."%' OR direccion_trabajador LIKE '%".$busca."%' OR colonia_trabajador LIKE '%".$busca."%' OR municipio_trabajador LIKE '%".$busca."%' OR estado_trabajador LIKE '%".$busca."%' OR codigo_postal_trabajador LIKE '%".$busca."%'  OR telefono_trabajador LIKE '%".$busca."%'  OR celular_trabajador LIKE '%".$busca."%' OR correo_trabajador LIKE '%".$busca."%'  OR tipo_contrato_trabajador LIKE '%".$busca."%'  OR sueldo_trabajador
 LIKE '%".$busca."%'  OR puesto_trabajador
 LIKE '%".$busca."%' OR departamento_trabajador
 LIKE '%".$busca."%' ");







?>
<center>
     <font size="8">MOSTRAR  TRABAJADORES</font> 
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
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
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

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
