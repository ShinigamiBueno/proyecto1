<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <h3>
      <center>
        <h1>Registrar Cajas Auxiliares</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="cajasauxiliares_ad2.php">
                <center>
                <th width="300">
                  <div>
                  <center>
                   <label>Nombre Auxiliares</label>
                  </center>
                   <select class="form-control" name="idtrabajador">
         
             
            <?php
              $consultar=$mysqli->query('SELECT  idtrabajador, nombre_trabajador FROM trabajadores');
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value='.$dato['idtrabajador'].'>'.$dato['nombre_trabajador'].'</option>';
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
                     Seleccionar Trabajador
                    </button>
                    
                 </center>
             

                </table> 
                </center>
            </form>
          </div>
  </section>
</section>

<?php include("footer_ad.php") ?>