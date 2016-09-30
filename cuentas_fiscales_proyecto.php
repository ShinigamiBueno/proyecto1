<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>


    <h3>
      <center>
        <h1>Seleccionar Bancos</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="cuentas_fiscales_proyecto2.php">
                <center>
                <th width="300">
                  <div>
                  <center>
                   
                  </center>
                   <select class="form-control" name="idempresa">
         
             
            <?php
              $idempresa=$_POST['idempresa'];
              $consultar=$mysqli->query('SELECT DISTINCT idempresa FROM cuentas_fiscales');
              
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){

                  $idempresa=$dato['idempresa'];
                  $consultar2=$mysqli->query('SELECT  representante_empresa, idbanco FROM empresa where idempresa='.$idempresa);
                  $dato2=mysqli_fetch_array($consultar2);


                   $idbanco=$dato2['idbanco'];
                  $consultar3=$mysqli->query('SELECT * FROM banco where idbanco='.$idbanco);
                  $dato3=mysqli_fetch_array($consultar3);


                  //echo '<option value='.$dato['idempresa'].'>'.$dato['representante_empresa'].' '.$dato2['tipo_banco'].'</option>';

                   echo '<option value='.$idempresa.'>'.$dato['idempresa'].' '.$dato2['representante_empresa'].' '.$dato3['tipo_banco'].'</option>';

                    // echo ' <input type="hidden" name="idempresa" value='.$idempresa.'>';
                }
              }
              echo '</select>';
              ?>
              <div>
              </center>
          
                 
              </th>
            
            

               <center>
                    <button
                     type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">
                     Seleccionar Banco
                    </button>
                    
                 </center>
             

                </table> 
                </center>
            </form>
          </div>
  

<?php include("footer_ad.php") ?>