<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
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
      <?php
        $query="SELECT idproveedores,idbanco,nombre_constructora_proveedores,rfc_proveedores,domicilio_proveedores,numero_cuenta_proveedores,clabe_interbancaria_proveedores,correo_proveedores FROM proveedores";
        $resultado=$mysqli->query($query);
        ?>
      <center>
        <table border=1 width="800">
          <thead>
            <tr >
             <th bgcolor="khaki">Nombre Constructora</th>

              <th bgcolor="khaki">RFC</th>
              <th bgcolor="khaki">Domicilio</th>
              <th bgcolor="khaki">Número de Cuenta</th>
              <th bgcolor="khaki">Clabe Interbancaria</th>
              <th bgcolor="khaki">Correo</th>
              <th bgcolor="khaki">Banco</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
 
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  $idbanco=$filas['idbanco'];
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['nombre_constructora_proveedores'].'</td>';
                  
                  echo '<td   bgcolor="skyblue" >'.$filas['rfc_proveedores'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['domicilio_proveedores'].'</td>';
                     echo '<td   bgcolor="skyblue" >'.$filas['numero_cuenta_proveedores'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['clabe_interbancaria_proveedores'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['correo_proveedores'].'</td>';

                   if ($stmt = $mysqli->prepare('SELECT tipo_banco
                  FROM banco WHERE idbanco = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idbanco);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($tipo_banco);
                   $stmt->fetch();
                 }
                  echo '<td   bgcolor="skyblue" >'.$tipo_banco.'</td>';
                 
                  echo '
                      <td class="danger">
                        <a href="modificar_proveedores.php?idproveedores='.$filas['idproveedores'].' " class="fa fa-pencil" ">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_proveedores.php?idproveedores='.$filas['idproveedores'].' " class="fa fa-trash-o "  ">Eliminar</a>
                      </td>';
                  echo '</tr>';
                }
              ?>
<?php include("footer_ad.php") ?>