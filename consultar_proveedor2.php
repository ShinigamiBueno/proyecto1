<?php
    
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    $page_title="Constructora";

    



     include("header_ad.php") ?>
      <?php error_reporting (0);?>
    <center>
      <h1>Mostrar Ingresos de Proveedores</h1>
    </center>
      <div class="row">
        <center>
          <table>
              <form class="col-xs-4" method="post" action="">
        </center>
        <?php
              $idproveedores=$_POST['idproveedores'];
         
    
           
                  $consultar2=$mysqli->query('SELECT  nombre_constructora_proveedores FROM proveedores where idproveedores='.$idproveedores);
                  $dato2=mysqli_fetch_array($consultar2);



                echo '<center>
                          <div class="col-md- col-md-offset-2">
                          <table  bgcolor="424a5d">
                            <td  bgcolor="424a5d" ><font size="6" color="white">Nombre: '.$dato2['nombre_constructora_proveedores'].' </font> 
                             </td>
                              <tr>
                           
                          </table>
                        </div>
                        </center>';
 
            ?>
            <div class="row">
          <div class="col-md-8 col-md-offset-2">
        
         
            
              <?php
                //echo "Ingresos";
             
             /* $query1="SELECT numero_folio,fecha,concepto,monto,referencia_obervacion FROM cuentas_fiscales  where iot='ingreso' and idproveedores=".$idproveedores;
                $resultado1=$mysqli->query($query1);
                $row1=mysqli_num_rows($resultado1);
                $col1=mysqli_num_fields($resultado1);*/

                //echo $resultado1;

              $query2="SELECT numero_folio,fecha,concepto,monto,referencia_obervacion,idempresa FROM cuentas_fiscales where iot='egreso' and idproveedores=".$idproveedores;
                $resultado2=$mysqli->query($query2);
                $row2=mysqli_num_rows($resultado2);
                $col2=mysqli_num_fields($resultado2);

                  //echo $resultado2;
                    if ($row1>=$row2) {
                       echo $mayor=$row1;
                       echo $menor=$row2;
                    }elseif ($row2>=$row1) {
                      echo $menor=$row1;
                       echo   $mayor=$row2;

                      # code...
                    }
                    echo 'Ingresos';
                  echo '<table border="1">';
                  echo '<th bgcolor="khaki">Número de Folio Ingreso</th>';
                  echo '<th bgcolor="khaki">Fecha Ingreso</th>';
                  echo '<th bgcolor="khaki">Concepto Ingreso</th>';
                  echo '<th bgcolor="khaki">Monto Ingreso</th>';
                  echo '<th bgcolor="khaki">referencia Obervacion Ingreso</th>';
                  echo '<th bgcolor="khaki">empresa</th>';
                  echo '<center><p>Egresos</p></center>';
                   echo '<th bgcolor="khaki">Número de Folio Egreso</th>';
                  echo '<th bgcolor="khaki">Fecha Egreso</th>';
                  echo '<th bgcolor="khaki">Concepto Egreso</th>';
                  echo '<th bgcolor="khaki">Monto Egreso</th>';
                  echo '<th bgcolor="khaki">referencia Obervacion Egreso</th>';
                //echo $fieldcount=mysqli_num_fields($query1);
               for ($i=0; $i <$mayor; $i++) {
                   echo '<tr>';

                   $fila=mysqli_fetch_array($resultado1);
                   $fila2=mysqli_fetch_array($resultado2);
                      
                   for ($j=0; $j <$col1; $j++) { 
                    echo '<td>';
                         echo 'Ingresos';
                    //echo $fila['numero_folio'];
                    //echo $col1;

                    echo $fila[$j];
                  
                   
                   // echo '<td   bgcolor="skyblue" >'.$fila[''].'</td>';

                      echo '</td>';


                        
                  }

                   for ($k=0; $k <$col2; $k++) { 
                    echo '<td>';
                   
                    //echo $col1;

                    echo $fila2[$k];
                   // echo '<td   bgcolor="skyblue" >'.$fila[''].'</td>';

                      echo '</td>';


                        
                  }

                   echo  '</tr>';
 
                  }

                 echo '</table>';

              
  

              
              ?>

 
              
         

              

      </div>
  
</div>

<?php include("footer_ad.php") ?>