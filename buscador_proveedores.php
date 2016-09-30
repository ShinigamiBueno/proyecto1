 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM proveedores WHERE nombre_constructora_proveedores LIKE '%".$busca."%' OR idbanco LIKE '%".$busca."%' OR rfc_proveedores LIKE '%".$busca."%' OR domicilio_proveedores LIKE '%".$busca."%' OR numero_cuenta_proveedores LIKE '%".$busca."%' OR clabe_interbancaria_proveedores LIKE '%".$busca."%' OR correo_proveedores LIKE '%".$busca."%' ");




?>
<center>
     <font size="8">MOSTRAR PROVEEDORES</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_proveedores.php"> 
              <td>
                <h3>Buscar Proveedores</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
             <td width="145" align="center">Reporte pdf<a href="reporte_proveedores_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
             <td width="145" align="center">Reporte Excel<a href="reporte_excel_proveedores_ad.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
            <th bgcolor="khaki">Nombre Constructora</th>
             <th bgcolor="khaki">Banco</th>
              <th bgcolor="khaki">RFC</th>
              <th bgcolor="khaki">Domicilio</th>
              <th bgcolor="khaki">Número de Cuenta</th>
              <th bgcolor="khaki">Clabe Interbancaria</th>
              <th bgcolor="khaki">Correo</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
                echo '<td   bgcolor="skyblue" >'.$filas['nombre_constructora_proveedores'].'</td>';
                echo '<td bgcolor="pink">'.$filas['idbanco'].'</td>';
                echo '<td   bgcolor="skyblue" >'.$filas['rfc_proveedores'].'</td>';
                echo '<td   bgcolor="skyblue" >'.$filas['domicilio_proveedores'].'</td>';
                echo '<td   bgcolor="skyblue" >'.$filas['numero_cuenta_proveedores'].'</td>';
                echo '<td bgcolor="pink">'.$filas['clabe_interbancaria_proveedores'].'</td>';
                echo '<td bgcolor="skyblue">'.$filas['correo_proveedores'].'</td>';
                echo '
                      <td class="danger">
                        <a href="modificar_proveedores.php?idproveedores='.$filas['idproveedores'].'">Modificar</a>
                      </td>';
                echo '
                      <td class="danger">
                        <a href="eliminar_proveedores.php?idproveedores='.$filas['idproveedores'].'">Eliminar</a>
                      </td>';            
echo '</tr>';

}

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
