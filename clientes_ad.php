<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>


    <h3>
      <center>
       <h1> Registrar Clientes </h1>

         <a href="agregar_municipio.php">Agregar Municipio</a>
      </center>

    </h3>
  <div class="row">
      <center>
          <table>
    <form class="col-xs-4" method="post" action="insertar_clientes_ad.php">
            <th width="300">
              <div>
                    
                    <label>Seleccionar Muncipio</label>
                    <select class="form-control" name="idmunicipio">
                  </div>
                  <?php
                    $consultar=$mysqli->query('SELECT idmunicipio, municipio FROM municipio');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                     
                        echo '<option value='.$dato['idmunicipio'].'>'.$dato['municipio'].'</option>';
                      
                    }
                    echo '</select>';
                    ?>
              </div>
              <div class="form-group">
                <label>Clave Municipio</label>
                <input  type="text" class="form-control" name="clave_municipio" placeholder=" Clave Municipio" required data-validation-required-message="Please enter a message.">
              </div>
            </th>
            <th width="200"></th>
            <th width="300">
              <div class="form-group" >
                <label>Representante Legal</label> 
                <input  type="text" class="form-control"  name="representante_legal" placeholder="Introduce Representante" required data-validation-required-message="Please enter a message.">
              </div>
              <div class="form-group">
                <label>Apellido Paterno Representante Legal</label>
                <input type="text" class="form-control" name="apellido_paterno_legal" placeholder="Apellido Paterno" required data-validation-required-message="Please enter a message.">
              </div>
                 <div class="form-group">
                 <label>Apellido Materno Representate Legal</label>
                 <input type="text" class="form-control" name="apellido_materno_legal" placeholder="Apellido Materno " required data-validation-required-message="Please enter a message.">
              </div>
            </th>
               <center>
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Registrar Enviar
                  </button>

               </center>

          </table> 
      </center>
    </form>
  </div>


<?php include("footer_ad.php") ?>




         
            