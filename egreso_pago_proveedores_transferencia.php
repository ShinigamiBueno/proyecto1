<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Realizar Egresos</h1>
      </center>
    </h3>
  <div class="row">
    <center>
      <table>
        <th width="200">
          <center>
            <a href="egreso_pago.php">
              <button

                type="submit" name="enviar"  value="enviar" class="btn btn-info" >
                  <i class="fa fa-folder-open"></i>
                Realizar un pago
              </button>
            </a>
              </th>
              <th width="200">
               <center>
                  <a href="transferencia.php">
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">
                    <i class="fa fa-exchange"></i>
                    Realizar una transferencia
                  </button></a>
              </th>
               <th width="300">
               <center>
                  <a href="egreso_proveedores.php">
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Realiza Pagos a proveedores
                  </button></a>
              </th>


               </center>

          </table> 
      </center>
    
  </div>
 

<?php include("footer_ad.php") ?>




         
            