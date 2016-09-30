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
            <form class="col-xs-4" method="post" action="registrar_proveedorCE_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Cantidad</label>
                    <input type="text" class="form-control" name="proveedorCE_cantidad" placeholder="Cantidad">
                  </div>
                  <div class="form-group">
                    <label>Entrada</label>
                    <input type="text" class="form-control" name="proveedorCE_entrada"  
                    placeholder="Entrada">
                  </div>
                  <div class="form-group">
                    <label>Salida</label>
                    <input type="text" class="form-control" name="proveedorCE_salida" placeholder="Salida">
                  </div>
                  <div class="form-group">
                    <label>Devuelve</label>
                    <input type="text" class="form-control" name="proveedorCE_devuelve"  
                    placeholder="Devuelve">
                  </div>
                  
                  
              </th>
              <th width="200"><th>
              <th width="300">
              <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="proveedorCE_fecha" placeholder="Fecha">
                  </div>
                  <div class="form-group">
                    <label>Monto</label>
                    <input type="text" class="form-control" name="proveedorCE_monto" placeholder="Monto">
                  </div>
                   <div class="form-group">
                    <label>Número RL</label>
                    <input type="text" class="form-control" name="proveedorCE_numeroRL" placeholder="Número RL">
                  </div>
                  <div class="form-group">
                    <label>Banco</label>
                    <input type="text" class="form-control" name="proveedorCE_banco" placeholder="Banco">
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

















