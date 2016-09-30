<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <center>
     <font size="8">MOSTRAR CUENTA MAYOR</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_empresa_ad.php"> 
              <td>
                <h3>Buscar Cuenta Mayor</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            <td width="145" align="center">Reporte PDF<a href="reporte_clientes_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
            <td width="145" align="center">Reporte Excel<a href="reporte_excel_clientes.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
         $query="SELECT idcuentamayor,idempresa,fecha,concepto,referencia_obervacion,monto,numero_folio
          FROM cuentamayor where iot='ingreso'";
          $resultado=$mysqli->query($query);
          $suma=0; 
      ?>  
      <center>
       <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table border=1 width="800">
          <thead>
            <tr >
              <th bgcolor="khaki">Número de Folio</th>
              <th bgcolor="khaki">Fecha</th>
              <th bgcolor="khaki">Concepto</th>
              <th bgcolor="khaki">Referencia Obsevación</th>
              <th bgcolor="khaki">Monto</th>
              <th bgcolor="khaki">Representante</th>
              

               <?php
               
                while($filas=mysqli_fetch_array($resultado)){
                 //  $idcuentas_fiscales=$filas['idcuentas_fiscales'];
                      $idempresa=$filas['idempresa'];
                   $suma=$suma+$filas['monto'];
                   
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['numero_folio'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['fecha'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['concepto'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['referencia_obervacion'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['monto'].'</td>';
                     


                  if ($stmt = $mysqli->prepare('SELECT representante_empresa,apellido_paterno_empresa,apellido_materno_empresa
                  FROM empresa WHERE idempresa = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idempresa);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($representante_empresa,$apellido_paterno_empresa,$apellido_materno_empresa);
                   $stmt->fetch();
                 }
                  echo '<td   bgcolor="skyblue" >'.$representante_empresa.' '.$apellido_paterno_empresa.' '.$apellido_materno_empresa.'</td>';
                 
                    


                  

                 
                 
                  
                 
                  echo '</tr>';
                }
                   echo'<p>Total del Monto '.$suma.'</p>';
              ?>
        </table>



      </div>
  
</div>
<?php include("footer_ad.php") ?>