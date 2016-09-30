<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Registrar Obras</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_obras_ad.php">
                <th width="300">
                  <div class="form-group">
                    <label>Nombre de la Obra</label>
                    <input type="text" class="form-control" name="nombre_obra"  
                    placeholder="Nombre de la Obra" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Clave Obra</label>
                    <input type="text" class="form-control" name="clave_obra"   
                    placeholder="Introduce Clave Obra" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Jefe de Construcción</label>
                    <input type="text" class="form-control" name="jefe_construccion_obra"   
                    placeholder="Introduce Jefe de Construcción" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Residente de Obra</label>
                    <input type="text" class="form-control" name="residente_obra"   
                    placeholder="Introduce Residente de Obra" required data-validation-required-message="Please enter a message.">
                  </div>
                  <div class="form-group">
                    <label>Coordinador de Obra</label>
                    <input type="text" class="form-control" name="coordinador_obra"   
                    placeholder="Introduce Coordinador de Obra" required data-validation-required-message="Please enter a message.">
                  </div>
                  
              </th>
              <th width="200"><th>
              <th width="300">
              <div>
                    <label>Empresas</label>
                    <select class="form-control" name="idempresa">
                  </div>
                  <?php
                    $consultar=$mysqli->query('SELECT idempresa, nombre_constructora FROM empresa');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                      if($dato['habilitado']==0){
                        echo '<option value='.$dato['idempresa'].'>'.$dato['nombre_constructora'].'</option>';
                      }
                    }
                    echo '</select>';
                    ?>
               <div class="form-group">
                 <label>Ubicación</label>
                 <input type="text" class="form-control" name="ubicacion"  placeholder="Ingresa Ubicación" required data-validation-required-message="Please enter a message.">
               </div>
               <div>
                 <label>Municipio</label>
                 <select class="form-control" name="idmunicipio">
               </div>
                  <?php
                    $consultar=$mysqli->query('SELECT idmunicipio, municipio FROM municipio');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                      if($dato['habilitado']==0){
                        echo '<option value='.$dato['idmunicipio'].'>'.$dato['municipio'].'</option>';
                      }
                    }
                    echo '</select>';
                    ?>
                <div class="form-group">
                  <label>Número de Contrato</label>
                  <input type="text" class="form-control" name="numero_contrato" placeholder="Ingresa número de contrato" required data-validation-required-message="Please enter a message." >
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <textarea name="descripcion" class="form-control" placeholder="Ingresa tu descripción" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </th>

                <center>
                  <button
                    type="submit" name="enviar"  value="enviar" class="btn btn-info">Registrar Obras
                  </button>
                </center>

                </table> 
                </center>
            </form>
          </div>
<?php include("footer_ad.php") ?>


















