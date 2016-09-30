<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
$page_title="Constructora";
?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <center>
      <i class="fa fa-angle-right">Registrar Cajas Auxiliares
      </i> 
    </center>
      <div class="row">
        <form class="col-xs-7" method="post" action="cajasauxiliares_ad2.php">
          
            <?php
              $idtrabajador=$_POST['idtrabajador'];
              $consultar=$mysqli->query('SELECT nombre_trabajador, puesto_trabajador, clave_trabajador FROM trabajadores where idtrabajador='.$idtrabajador);
              $dato=mysqli_fetch_array($consultar);
              echo '
                <div class="form-group">
                  <label>Nombre Auxiliares</label>
                    <input type="text" class="form-control" name="nombre_trabajador" value='.$dato['nombre_trabajador'].'>
                </div>
              ';
              echo '
                <div class="form-group">
                  <label>Clave Trabajador</label>
                    <input type="text" class="form-control" name="clave_trabajador" value='.$dato['clave_trabajador'].' disabled>
                </div>
              ';
              echo '
                <div class="form-group">
                  <label>Puesto Trabajador</label>
                    <input type="text" class="form-control" name="puesto_trabajador" disabled value='.$dato['puesto_trabajador'].' >
                </div>
              ';
              echo ' <input type="hidden" name="idtrabajador" value='.$idtrabajador.'>';
              ?>


         
          

          
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

