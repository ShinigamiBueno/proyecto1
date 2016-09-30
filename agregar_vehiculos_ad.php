<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Registrar Vehiculos</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_vehiculo_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Agregar Clave Vehiculos</label>
                    <input type="text" class="form-control" name="clave_vehiculo" placeholder="Ingrece Clave Vehiculo" required data-validation-required-message="Please enter a message.">
                 </div>  
                  <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" class="form-control" name="modelo_vehiculo" placeholder="Ingrece Modelo Vehiculo" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="marca_vehiculo"  placeholder="Ingrece Marca" required data-validation-required-message="Please enter a message.">
                  </div>
                  
                </th>
              <th width="200"><th>
              <th width="300">
                <div class="form-group">
                   <label>Placas</label>
                   <input type="text" class="form-control" name="placas_vehiculo"placeholder="Ingrece Placas Vehiculo" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Tipo Combustible</label>
                  <input type="text" class="form-control" name="tipo_combustible_vehiculo" placeholder="Ingrece Tipo de Combustible" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Capacidad Litros</label>
                  <input type="text" class="form-control" name="capacidad_litros_vehiculo"  placeholder="Ingrece Capacidad Litros" required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">  
                  <label>Tipo de Filtro</label>
                  <input type="text" class="form-control" name="tipo_filtro_vehiculo"  placeholder="Ingrece Tipo de Filtro" required data-validation-required-message="Please enter a message.">
                </div>
               
              </th>

                <center>
                  <button
                    type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Vehiculos
                  </button>
                </center>

                </table> 
                </center>
            </form>
          </div>

<?php include("footer_ad.php") ?>