 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM usuario WHERE nombre LIKE '%".$busca."%' OR apellido_paterno LIKE '%".$busca."%' OR apellido_materno LIKE '%".$busca."%' OR curp LIKE '%".$busca."%' OR estado LIKE '%".$busca."%' OR municipio LIKE '%".$busca."%' ");




?>
<center>
     <font size="8">MOSTRAR ADMINISTRADOR</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_administrador.php"> 
              <td>
                <h3>Buscar Administrador</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
             <td width="145" align="center">Reporte Pdf<a href="reporte_administradores_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
             <td width="145" align="center">Reporte Excel<a href="reporte_excel_administrador.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
             <th bgcolor="khaki">Nombre</th>
              <th bgcolor="khaki">Apellido Paterno</th>
              <th bgcolor="khaki">Apellido Materno</th>
              <th bgcolor="khaki">Curp</th>
              <th bgcolor="khaki">Estado</th>
              <th bgcolor="khaki">Municipio</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
                  echo '<td   bgcolor="skyblue" >'.$filas['nombre'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_paterno'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_materno'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['curp'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['estado'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['municipio'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_administrador.php?idusuario='.$filas['idusuario'].'">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_administradores.php?idusuario='.$filas['idusuario'].'">Eliminar</a>
                      </td>';           
echo '</tr>';

}

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
