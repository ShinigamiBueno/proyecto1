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
            <form class="col-xs-4" method="post" action="transferencia2.php">
                <center>
                <th width="300">
                 <div>
                    <label>Seleccionar Banco</label>
                    <select class="form-control" name="idempresa">
                  </div>
                  <?php
                   
                    $consultar=$mysqli->query('SELECT empresa.idempresa,representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,banco.tipo_banco from empresa INNER JOIN  banco ON  banco.idbanco=empresa.idbanco');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                      if($dato['habilitado']==0){
                        echo '<option value='.$dato['idempresa'].'>'.$dato['representante_empresa'].' '.$dato['apellido_paterno_empresa'].' '.$dato['apellido_materno_empresa'].'  '.$dato['tipo_banco'].' </option>';
                      }
                    }
                    echo '</select>';
                    ?>
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
