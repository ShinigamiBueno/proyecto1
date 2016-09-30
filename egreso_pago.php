<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>


      <center>
        <h1>Seleccionar Municipio</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="egreso_pago2.php">
                <center>
                <th width="300">
                  <div>
                  <center>
                   <label></label>
                  </center>
                   <select class="form-control" name="idmunicipio">
         
             
            <?php
             $idmunicipio=$_POST['idmunicipio'];
              $consultar=$mysqli->query('SELECT  idmunicipio,municipio FROM municipio');
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value='.$dato['idmunicipio'].'>'.$dato['municipio'].'</option>';
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
                     Seleccionar Municipio
                    </button>
                    
                 </center>
             

                </table> 
                </center>
            </form>
          </div>


<?php include("footer_ad.php") ?>