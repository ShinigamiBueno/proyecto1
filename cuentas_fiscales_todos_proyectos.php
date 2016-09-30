<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <center>
     <font size="8">MOSTRAR CUENTAS FISCALES</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_obras.php"> 
              <td>
                <h3>Buscar Cuentas Fiscales</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            
      <td width="145" align="center">Reporte Pdf<a href="reporte_cuentas_fiscales_historial_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
         <td width="145" align="center">Reporte Excel<a href="reporte_cuentas_fiscales_historial_excel.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
         $query="SELECT idcuentas_fiscales,idempresa,fecha,concepto, monto,referencia_obervacion,numero_folio FROM cuentas_fiscales where iot='ingreso'";
        $resultado=$mysqli->query($query);
        $suma=0; 
      ?>  
      <center>
        <table border=1 width="800">
          <thead>
            <tr >
              <th  bgcolor="khaki">Número de Folio</th>
             <th bgcolor="khaki">Fecha</th>
              <th bgcolor="khaki">Concepto</th>
              <th  bgcolor="khaki">Monto</th>
               <th  bgcolor="khaki">Referencia Observación</th>
                <th  bgcolor="khaki">Representante Empresa</th>
                <th  bgcolor="khaki">Banco</th>
              
              <?php
                while($filas=mysqli_fetch_array($resultado)){
                  $idempresa=$filas['idempresa'];
                  $suma=$suma+$filas['monto'];
                   
                  echo '<tr>';
                   echo '<td   bgcolor="skyblue" >'.$filas['numero_folio'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['fecha'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['concepto'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['monto'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['referencia_obervacion'].'</td>';
                 
                  
                   if ($stmt = $mysqli->prepare('SELECT representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,idbanco
                  FROM empresa WHERE idempresa = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idempresa);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($representante_empresa,$apellido_paterno_empresa,$apellido_materno_empresa,$idbanco);
                   $stmt->fetch();
                 }
                  echo '<td   bgcolor="skyblue" >'.$representante_empresa.' '.$apellido_paterno_empresa.' '.$apellido_materno_empresa.' </td>';
                 

                 if ($stmt = $mysqli->prepare('SELECT tipo_banco
                  FROM banco WHERE idbanco = ? LIMIT 1')) {
                   $stmt->bind_param('i', $idbanco);  // Bind "$municipio" to parameter.
                   $stmt->execute();    // Execute the prepared query.
                   $stmt->store_result();
                    // get variables from result.
                    $stmt->bind_result($tipo_banco);
                   $stmt->fetch();
                 }

                    echo '<td   bgcolor="skyblue" >'.$tipo_banco.' </td>';
                    
                  
                  echo '</tr>';


                 
                }
                echo'<p>Total del Monto '.$suma.'</p>';

                
              ?>

<?php include("footer_ad.php") ?>