 <?php

  $busca="";

error_reporting(E_ALL ^ E_NOTICE);
$busca=$_POST['busca'];
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

  $page_title="Constructora";
   include("header_ad.php");
if($busca!=""){

$busqueda=$mysqli->query("SELECT * FROM representantes_legales WHERE representante_legal LIKE '%".$busca."%' OR apellido_paterno_legal LIKE '%".$busca."%' OR apellido_materno_legal LIKE '%".$busca."%' ");




?>
<center>
     <font size="8">MOSTRAR CLIENTES</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_obras.php"> 
              <td>
                <h3>Buscar Obras</h3>
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
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <table align="center" border=1 width="900">
          <thead>
            <tr >
              <th bgcolor="khaki">Representante Legal</th>
              <th bgcolor="khaki">Apellido Paterno Legal</th>
              <th bgcolor="khaki">Apellido Materno Legal</th>
              <th bgcolor="khaki">Municipio</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
            <tr>
            <?php
              while($filas=mysqli_fetch_array($busqueda)){
                echo '<tr>';
               echo '<td   bgcolor="skyblue" >'.$filas['representante_legal'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_paterno_legal'].'</td>';
                   echo '<td   bgcolor="skyblue" >'.$filas['apellido_materno_legal'].'</td>';
                  

                  if ($stmt = $mysqli->prepare('SELECT municipio
                  FROM municipio WHERE idmunicipio = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idmunicipio);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($municipio);
                   $stmt->fetch();
                 }
                  echo '<td   bgcolor="skyblue" >'.$municipio.'</td>';
                 
                  echo '
                      <td class="danger">
                        <a href="modificar_clientes.php?idrepresentantes_legales='.$filas['idrepresentantes_legales'].'" class="fa fa-pencil">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_clientes.php?idrepresentantes_legales='.$filas['idrepresentantes_legales'].'" class="fa fa-trash-o " >Eliminar</a>
                      </td>';
                 
                  echo '</tr>';


}

}



?>
</table>
</div>
</div>






<?php include("footer_ad.php") ?>
