<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
$page_title="Constructora";
?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <center>
      <i class="fa fa-angle-right">Proyecto
      </i> 
    </center>
      <div class="row">
        <form class="col-xs-7" method="post" action="registrar_proyectos.php">
          
            <?php
              $idmunicipio=$_POST['idmunicipio'];
              $consultar=$mysqli->query('SELECT municipio ,idmunicipio FROM municipio where idmunicipio='.$idmunicipio);
              $dato=mysqli_fetch_array($consultar);
              echo '
                <div class="form-group">
                  <label>municipio</label>
                  <input type="text" class="form-control" name="municipio1" value="'.$dato['municipio'].'" disabled>
                  <input type="hidden" class="form-control" name="idmunicipio" value="'.$dato['idmunicipio'].'">
                </div> ';
            ?>
              
            <?php
              $idempresa=$_POST['idempresa'];
              $consultar1=$mysqli->query('SELECT nombre_constructora, idempresa FROM empresa where idempresa='.$idempresa);
              $dato=mysqli_fetch_array($consultar1);
              echo '
                <div class="form-group">
                  <label>Empresa</label>
                  <input type="text" class="form-control" name="nombre_constructora1" value="'.$dato['nombre_constructora'].'" disabled>
                  <input type="hidden" class="form-control" name="idempresa" value="'.$dato['idempresa'].'">
                </div>
              ';?>

              <?php 
               $idobras=$_POST['idobras'];
               $consultar=$mysqli->query('SELECT clave_obra,idobras FROM obras WHERE idobras='.$idobras);
                $dato=mysqli_fetch_array($consultar);
                echo '
                <div class="form-group">
                  <label>Claves Obras</label>
                  <input type="text" class="form-control" name="clave_obra1" value="'.$dato['clave_obra'].'" disabled>
                  <input type="hidden" class="form-control" name="idobras" value="'.$dato['idobras'].'">
                </div>';
              ?>

               <?php 
               $idrepresentantes_legales=$_POST['idrepresentantes_legales'];
               $consultar=$mysqli->query('SELECT representante_legal,apellido_paterno_legal,apellido_materno_legal,idrepresentantes_legales FROM representantes_legales WHERE idrepresentantes_legales='.$idrepresentantes_legales);
                $dato=mysqli_fetch_array($consultar);
                echo '
                <div class="form-group">
                  <label>Representantes Legales</label>
                  <input type="text" class="form-control" name="representante_legal1" value="'.$dato['representante_legal'].' '.$dato['apellido_paterno_legal'].' '.$dato['apellido_materno_legal'].'" disabled>
                  <input type="hidden" class="form-control" name="idrepresentantes_legales" value=" '.$dato['idrepresentantes_legales'].'">
                </div>';
              ?>
              <div class="form-group">
                <label>Monto</label>
                 <input class="form-control" type="text" id="monto" name="monto" placeholder="Ingresar Monto"> 

              </div>
              <div class="form-group">
                <label>Factura</label>
                 <input class="form-control" type="text" id="factura_proyectos" name="factura_proyectos" placeholder="Ingresar Factura"> 

              </div>




              
              

         
          

          
                 <center>
                    <button
                     type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">
                     Registrar Obras
                    </button>
                    
                 </center>
                  </div>
            </form>
          </div><!-- /row -->
    </section>
</section>
      

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 -^.^-
              <a href="basic_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>


<?php include("footer_ad.php") ?>

<!--?php
} else {
        echo 'No esta autorizado para acceder a esta pagina. Por favor, inicie su sesion';
        echo '<p><a href=login.php>Reintentar</a></p>';
}
?-->

