<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> REGISTRAR MAQUINARIA </h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_maquinaria_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Agregar Clave Maquinaria</label>
                    <input type="text" class="form-control" name="clave_maquinaria" placeholder="Ingrece Clave Maquinaria" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Modelo Maquinaria</label>
                    <input type="text" class="form-control" name="modelo_maquinaria" placeholder="Ingrece Modelo Maquinaria" required data-validation-required-message="Please enter a message.">
                  </div>
                   <div class="form-group">
                    <label>Número de Serie </label>
                    <input type="text" class="form-control" name="num_serie_maquinaria"  placeholder="Ingrece Número de Serie" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Marca</label>
                    <input type="text" class="form-control" name="marca_maquinaria" placeholder="Ingrece Marca Maquinaria" required data-validation-required-message="Please enter a message.">
                 </div>
                  <div class="form-group">
                    <label>Tipo Combustible</label>
                    <input type="text" class="form-control" name="tipo_combustible_maquinaria" placeholder="Ingrece Tipo de Combustible" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Capacidad Litros</label>
                    <input type="text" class="form-control" name="capacidad_litros_maquinaria"  placeholder="Ingrece Capacidad Litros" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">  
                    <label>Filtro Diesel</label>
                    <input type="text" class="form-control" name="filtro_diesel_maquinaria"  placeholder="Ingrece Tipo de Filtro Diesel" required data-validation-required-message="Please enter a message.">
                  </div>
              </th>
              <th width="200"><th>
              <th width="300">
               <div class="form-group">  
              <label>Filtro Trampa</label>
              <input type="text" class="form-control" name="filtro_trampa_maquinaria"  placeholder="Ingrece Tipo de Filtro Trampa" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Filtro Hidráulico</label>
              <input type="text" class="form-control" name="filtro_hidraulico_maquinaria"  placeholder="Ingrece Tipo de Filtro Hidraulico" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Filtro Aceite</label>
              <input type="text" class="form-control" name="filtro_aceite_maquinaria"  placeholder="Ingrece Tipo de Filtro Aceite" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Filtro Aire</label>
              <input type="text" class="form-control" name="filtro_aire_maquinaria"  placeholder="Ingrece Tipo de Filtro Aire" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Llanta Trasera</label>
              <input type="text" class="form-control" name="llanta_trasera_maquinaria"  placeholder="Ingrece Tipo de llanta Trasera" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Llanta Delantera</label>
              <input type="text" class="form-control" name="llanta_delantera_maquinaria"  placeholder="Ingrece Tipo de llanta Delantera" required data-validation-required-message="Please enter a message.">
            </div>
            <div class="form-group">  
              <label>Tipo Aceite</label>
              <input type="text" class="form-control" name="tipo_aceite_maquinaria"  placeholder="Ingrece Tipo de llanta Delantera" required data-validation-required-message="Please enter a message.">
            </div>
            
              </th>

                <center>
                  <button
                    type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Maquinaria
                  </button>
                </center>

                </table> 
                </center>
            </form>
          </div>
<?php include("footer_ad.php") ?>