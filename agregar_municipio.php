<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>


    <h3>
      <center>
       <h1> Registrar Municipio </h1>

         <a href="agregar_municipio.php">Agregar Municipio</a>
      </center>

    </h3>
  <div class="row">
      <center>
          <table>
    <form class="col-xs-4" method="post" action="registrar_municipio.php">
            <th width="300">
              <div  class="form-group">
                <label>Municipio</label>
                <input type="text" class="form-control" name="municipio"
                placeholder="Ingresa el municipio">
              </div>
            </th>
               <center>
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Registrar Municipio
                  </button>

               </center>

          </table> 
      </center>
    </form>
  </div>
 

<?php include("footer_ad.php") ?>




         
            