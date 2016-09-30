<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Registro de Ingreso y Egreso </h1>
      </center>
    </h3>
  <div class="row">
    <center>
      <table>
        <th width="200">
          <center>
            <a href="ingreso.php">
              <button
                type="submit" name="enviar"  value="enviar" class="btn btn-info">Ingreso
              </button>
            </a>
              </th>
              <th width="200">
               <center>
                  <a href="egreso_pago_proveedores_transferencia.php">
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Egreso
                  </button></a>
              </th>

               </center>

          </table> 
      </center>
    
  </div>
 

<?php include("footer_ad.php") ?>




         
            