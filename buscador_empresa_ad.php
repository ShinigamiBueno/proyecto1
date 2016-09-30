 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM empresa WHERE nombre_constructora LIKE '%".$busca."%' OR clave_empresa LIKE '%".$busca."%' OR representante_empresa LIKE '%".$busca."%' OR apellido_paterno_empresa LIKE '%".$busca."%' OR apellido_materno_empresa LIKE '%".$busca."%' OR codigo_postal_empresa LIKE '%".$busca."%' OR rfc LIKE '%".$busca."%' OR numero_interior_empresa LIKE '%".$busca."%' OR numero_exterior_empresa LIKE '%".$busca."%' OR domicilio LIKE '%".$busca."%' OR numero_cuenta LIKE '%".$busca."%' OR clabe_interbancaria LIKE '%".$busca."%' OR correo LIKE '%".$busca."%'  ");




?>
<center>
     <font size="8">MOSTRAR EMPRESAS</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_empresa_ad.php"> 
              <td>
                <h3>Buscar Empresa</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            <td width="145" align="center">Reporte PDF<a href="reporte_empresa_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
            <td width="145" align="center">Reporte Excel<a href="reporte_excel_empresa_ad.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
 <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
            <th bgcolor="khaki">Nombre Constructora</th>
              <th bgcolor="khaki">Representante</th>
              <th bgcolor="khaki">Apellido Paterno</th>
              <th bgcolor="khaki">Apellido Materno</th>   
              <th bgcolor="khaki">Clave Empresa</th>
              <th bgcolor="khaki">Codigo Postal</th>
              <th bgcolor="khaki">rfc</th>
              <th bgcolor="khaki">Número Interior</th>
              <th bgcolor="khaki">Número Exterior</th>
              <th bgcolor="khaki">Domicilio</th>
              <th bgcolor="khaki">Número Cuenta</th>
              <th bgcolor="khaki">Clabe Interbancaria</th>
              <th bgcolor="khaki">Correo</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
               $idempresa=$f['idempresa'];
              echo '<td   bgcolor="skyblue" >'.$filas['nombre_constructora'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['representante_empresa'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_paterno_empresa'].'</td>';
                     echo '<td   bgcolor="skyblue" >'.$filas['apellido_materno_empresa'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['clave_empresa'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['codigo_postal_empresa'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['rfc'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['numero_interior_empresa'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['numero_exterior_empresa'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['domicilio'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['numero_cuenta'].'</td>';
                  echo '<td bgcolor="">'.$filas['clabe_interbancaria'].'</td>';
                  echo '<td bgcolor="">'.$filas['correo'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_empresa.php?idempresa='.$filas['idempresa'].'" class="fa fa-pencil">Modificar</a>
                      </td>';
              echo '
              <td class="danger">
                <a href="eliminar_empresa.php?idempresa='.$filas['idempresa'].'">Eliminar</a>
              </td>';


  

                

echo '</tr>';

}

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
