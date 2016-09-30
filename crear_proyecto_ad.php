<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <h3>
      <center>
        <h1>CREAR PROYECTOS</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="crear_proyecto_ad2.php">
                <center>
                <th width="300">
                  <div>
                  <center>
                   <label>Muncipio</label>
                  </center>
                   <select class="form-control" name="idmunicipio">
         
             
            <?php
              $consultar=$mysqli->query('SELECT idmunicipio, municipio FROM municipio');
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value='.$dato['idmunicipio'].'>'.$dato['municipio'].'</option>';
                }
              }
              echo '</select>';
              ?>
               <br>
               <div>
               <center>
               <label>Empresas</label>
               </center>
               <select class="form-control" name="idempresa">
               </div>
              <?php
              $consultar=$mysqli->query('SELECT idempresa, nombre_constructora FROM empresa');
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value="'.$dato['idempresa'].'">'.$dato['nombre_constructora'].'</option>';
                }
              }
              echo '</select>';
              ?>

              <br>
              <div>
              <center>
              <label>Representante Legal</label>
              </center>
              <select class="form-control" name="idrepresentantes_legales">
              </div>
              <?php 
              $consultar=$mysqli->query('SELECT idrepresentantes_legales, representante_legal, apellido_paterno_legal,apellido_materno_legal FROM representantes_legales');
              while ($dato=mysqli_fetch_array($consultar)) {
                if ($dato['habilitado']==0) {
                  echo '<option value='.$dato['idrepresentantes_legales'].'>'.$dato['representante_legal'].' '.$dato['apellido_paterno_legal'].' '.$dato['apellido_materno_legal'].'</option>';
                }
              } echo '</select>';
              ?>
              <br>
              <div>
              <center>
              <label>Claves obras</label>
              </center>
              <select class="form-control" name="idobras">
              </div>
              <?php 
              $consultar=$mysqli->query('SELECT idobras, clave_obra FROM obras');
              while ($dato=mysqli_fetch_array($consultar)) {
                if ($dato['habilitado']==0) {
                  echo '<option value='.$dato['idobras'].'>'.$dato['clave_obra'].'</option>';
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
                     proyecto
                    </button>
                    
                 </center>
             

                </table> 
                </center>
            </form>
          </div>
  </section>
</section>

<?php include("footer_ad.php") ?>