<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

    <h3>
      <center>
        <h1> Registrar Proveedores</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_proveedores_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Nombre de la Constructora</label>
                    <input type="text" class="form-control" name="nombre_constructora_proveedores" 
                    placeholder="Nombre de la  Constructora" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>RFC</label>
                    <input type="text" class="form-control" name="rfc_proveedores" 
                    placeholder="Ingresa rfc" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Domicilio</label>
                    <input type="text" class="form-control" name="domicilio_proveedores" 
                    placeholder="Ingresa el domicilio" required data-validation-required-message="Please enter a message.">
                  </div>
              </th>
              <th width="200"><th>
              <th width="300">
              <div class="form-group">
                <label>Número de cuenta</label>
                <input type="text" class="form-control" name="numero_cuenta_proveedores"  
                placeholder="Ingresa número de cuenta" required data-validation-required-message="Please enter a message.">
              </div>
              <div class="form-group">     
                <label>Clabe interbancaria</label>
                <input type="text" class="form-control" name="clabe_interbancaria_proveedores" 
                placeholder="Ingresa Clave interbancaria" required data-validation-required-message="Please enter a message.">
              </div>
              <div class="form-group">
                <label>Correo Electronico</label>
                <input type="text" class="form-control" name="correo_proveedores"  
                placeholder="Ingresa tu correo" required data-validation-required-message="Please enter a message.">
               </div>  
               <div>
                <label>Seleccionar Banco</label>

                    
       
                    <select class="form-control" name="idbanco">
                  </div>
                  <?php
                    $consultar=$mysqli->query('SELECT idbanco, tipo_banco FROM banco');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                     
                        echo '<option value='.$dato['idbanco'].'>'.$dato['tipo_banco'].'</option>';
                      
                    }
                    echo '</select>';
                    ?>
                </div>
                
            </th>

              <center>
                    <button
                     type="submit" name="enviar" value="enviar" class="btn btn-info">
                     Registrar Proveedores
                    </button>
              </center

                </table> 
                </center>
            </form>
          </div>


<?php include("footer_ad.php") ?>