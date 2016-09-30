<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Registrar Empresas </h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_empresas_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Nombre Constructora</label>
                    <input type="text" class="form-control" name="nombre_constructora" placeholder="Constructora" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Clave</label>
                    <input type="text" class="form-control" name="clave_empresa"  
                    placeholder="Clave" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Representante</label>
                    <input type="text" class="form-control" name="representante_empresa" placeholder="Representante" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellido_paterno_empresa" placeholder="Apellido Paterno" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" name="apellido_materno_empresa" placeholder="Apellido Materno" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Codigo Postal</label>
                    <input type="text" class="form-control" name="codigo_postal_empresa" placeholder="Codigo Postal" required data-validation-required-message="Please enter a message.">
                  </div>
                   <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" name="correo" placeholder="Ingresa Correo" required data-validation-required-message="Please enter a message.">
                  </div>
                 
              </th>
              <th width="200"><th>
              <th width="300">
                <div class="form-group">
                    <label>RFC</label>
                    <input type="text" class="form-control" name="rfc" placeholder="RFC" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Número Interior</label>
                  <input type="text" class="form-control" name="numero_interior_empresa"  
                  placeholder="Número Interior" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Número Exterior</label>
                  <input type="text" class="form-control" name="numero_exterior_empresa"  
                  placeholder="Número Exterior" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Domicilio</label>
                  <input type="text" class="form-control" name="domicilio"  
                  placeholder="Domicilio" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Número Cuenta</label>
                  <input type="text" class="form-control" name="numero_cuenta"  
                  placeholder="Número Cuenta" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Clabe Interbancaria</label>
                  <input type="text" class="form-control" name="clabe_interbancaria" placeholder="Número Cuenta" required data-validation-required-message="Please enter a message.">
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
                     Registrar Empresas
                    </button>
              </center>  

                </table> 
                </center>
            </form>
          </div>

<?php include("footer_ad.php") ?>

















