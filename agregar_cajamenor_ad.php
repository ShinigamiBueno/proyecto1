<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <h3>
      <center>
        <h1> Registrar Caja Menor </h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_cajamenor_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" name="cajamenor_ciudad" placeholder="Ciudad">
                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="cajamenor_fecha"  
                    placeholder="Fecha">
                  </div>
                  <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="cajamenor_cantidad" placeholder="Cantidad">
                  </div>
                  
              </th>
              <th width="200"><th>
              <th width="300">
              <div class="form-group">
                    <label>Pago</label>
                    <input type="text" class="form-control" name="cajamenor_pago" placeholder="Pago">
                  </div>
                  <div class="form-group">
                    <label>Saldo</label>
                    <input type="text" class="form-control" name="cajamenor_saldo" placeholder="Saldo">
                  </div>
                  <div class="form-group">
                    <label>Concepto</label>
                    <input type="text" class="form-control" name="cajamenor_concepto" placeholder="Concepto">
                  </div>
                 
               
            </th>

             <center>
                    <button
                     type="submit" name="enviar" value="enviar" class="btn btn-info">
                     Registrar Caja Menor
                    </button>
              </center>  

                </table> 
                </center>
            </form>
          </div>
  </section>
</section>

<?php include("footer_ad.php") ?>

















