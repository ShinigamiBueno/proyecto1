<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>
    <h3>
      <center>
        <h1> Registrar Trabajadores</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="registrar_trabajadores_ad.php">
              <th width="300">
                <div class="form-group">
                  <label>Agregar Clave Trabajador</label>
                  <input type="text" class="form-control" name="clave_trabajador" placeholder="Ingrece Clave Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>  
                <div class="form-group">
                  <label>Nombre Trabajador</label>
                  <input type="text" class="form-control" name="nombre_trabajador" placeholder="Ingrece Nombre del Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Apellido Paterno Trabajador</label>
                  <input type="text" class="form-control" name="apellido_paterno_trabajador"  placeholder="Ingrece Apellido Paterno Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Apellido Materno Trabajador</label>
                  <input type="text" class="form-control" name="apellido_materno_trabajador"  placeholder="Ingrece Apellido Materno Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Curp</label>
                  <input type="text" class="form-control" name="curp_trabajador" placeholder="Ingrece Curp Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Dirección</label>
                  <input type="text" class="form-control" name="direccion_trabajador" placeholder="Ingrece  Dirección Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">  
                  <label>Colonia</label>
                  <input type="text" class="form-control" name="colonia_trabajador"  placeholder="Ingrece Colonia Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Municipio</label>
                  <input type="text" class="form-control" name="municipio_trabajador" placeholder="Ingrece Municipio Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                  
              </th>
              <th width="200"><th>
              <th width="300">
                <div class="form-group">
                  <label>Estado</label>
                  <input type="text" class="form-control" name="estado_trabajador" placeholder="Ingrece Estado Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Codigo Postal</label>
                  <input type="text" class="form-control" name="codigo_postal_trabajador" placeholder="Ingrece Codigo de Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono_trabajador" placeholder="Ingrece Telefono de Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Celular</label>
                  <input type="text" class="form-control" name="celular_trabajador" placeholder="Ingrece Celular Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Correo</label>
                  <input type="text" class="form-control" name="correo_trabajador" placeholder="Ingrece Correo Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Tipo Contrato</label>
                  <input type="text" class="form-control" name="tipo_contrato_trabajador" placeholder="Ingrece Tipo de Contrato Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>sueldo</label>
                  <input type="text" class="form-control" name="sueldo_trabajador" placeholder="Ingrece Sueldo Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Puesto</label>
                  <input type="text" class="form-control" name="puesto_trabajador" placeholder="Ingrece Puesto Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
                <div class="form-group">
                  <label>Departamento</label>
                  <input type="text" class="form-control" name="departamento_trabajador" placeholder="Ingrece Departamento Trabajador"  required data-validation-required-message="Please enter a message.">
                </div>
              </th>
                <center>
                <button
                  type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Trabajores
                </button>
              </center>

                </table> 
                </center>
            </form>
          </div>

<?php include("footer_ad.php") ?>