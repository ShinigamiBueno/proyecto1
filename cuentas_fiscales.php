<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Consultar Cuentas Fiscales </h1>
      </center>
    </h3>
  <div class="row">
    <center>
      <table>
        <th width="200">
          <center>
            <a href="cuentas_fiscales_proyecto.php">
              <button
                type="submit" name="enviar"  value="enviar" class="btn btn-info">Por Proyecto
              </button>
            </a>
              </th>
              <th width="200">
               <center>
                  <a href="cuentas_fiscales_todos_proyectos.php">
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Todos los proyectos
                  </button></a>
              </th>

               </center>

          </table> 
      </center>
    
  </div>
 

<?php include("footer_ad.php") ?>




         
            