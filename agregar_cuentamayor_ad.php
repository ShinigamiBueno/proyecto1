<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <h3>
      <center>
        <h1> Cuenta Mayor </h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_cuentamayor_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Periodo</label>
                    <input type="text" class="form-control" name="cuentamayor_periodo"placeholder="Periodo">
                  </div>
                  
              </th>
             

             <center>
                    <button
                     type="submit" name="enviar" value="enviar" class="btn btn-info">
                     Registrar Cuenta Mayor
                    </button>
              </center>  

                </table> 
                </center>
            </form>
          </div>
  </section>
</section>

<?php include("footer_ad.php") ?>

















