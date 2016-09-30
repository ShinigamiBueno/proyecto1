<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';



$page_title="Constructora";
?>


<?php include("header_ad.php") ?>


<section id="main-content">
  <section class="wrapper">
  <script type="text/JavaScript" src="assets/js/sha512.js"></script> 
    <script type="text/JavaScript" src="assets/js/forms.js"></script>
    <h3>
      <center>
        <h1> Registrar Obras</h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
        
    <div class="row">
      <form class="col-xs-7" name="registration_form" method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
          <th width="300">
         <div class="form-group">
         <label>Usuario:</label><br/>
            <select class="form-control" name="tipo_usuario">
            <option value="ad">Administrador</option>
            </select>
       </div>
          
          <div class="form-group">
            <label>Nombre</label></br>
            <input type="text" class="form-control" name="nombre" placeholder="Introduce tu nombre">
          </div>
          <div class="form-group">
            <label>Apellido Paterno</label>
            <input type="text" class="form-control" name="apellido_paterno" placeholder="Ingresa apellido paterno">
          </div>
          <div class="form-group">
            <label>Apellido Materno</label>
            <input type="text" class="form-control" name="apellido_materno" placeholder="Ingresa apellido materno">
          </div>
          <div class="form-group">
            <label>Curp</label>
            <input type="text" class="form-control" name="curp"  placeholder="Ingresa tu curp">
          </div>
          <div class="form-group">
            <label>Estado</label>
            <input type="text" class="form-control" name="estado"  placeholder="Ingresa tu estado">
          </div> 
          <div class="form-group">
            <label>Municipio</label>
            <input type="text" class="form-control" name="municipio" placeholder="Ingresa tu municipio">
          </div>
          <div class="form-group">
            <label>Colonia</label>
            <input type="text" class="form-control" name="colonia"  placeholder="Ingresa tu colonia">
          </div>
           <div class="form-group">
            <label>País</label>
            <input type="text" class="form-control" name="pais" placeholder="Ingresa tu país">
          </div>
          </th>
          <th width="200"><th>
          <th width="300">
         
          <div class="form-group">
            <label>Código Postal</label>
            <input class="form-control" name="codigo_postal" placeholder="Ingresa el codigo postal">
          </div>
          <div class="form-group">
            <label>Calle</label>
            <input type="text" class="form-control" name="calle" placeholder="Ingresar calle">
          </div>
          <div class="form-group">
            <label>Número Interior</label>
            <input type="number" class="form-control" name="numero_interior" placeholder="Ingresar numero interior">
          </div>
          <div class="form-group">
            <label class="form-group">Número Exterior</label>
            <input type="number" class="form-control" name="numero_exterior" placeholder="Ingresar numero exterior">
          </div>
          <div class="form-group">
            <label>Teléfono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Ingresa el teléfono">
          </div>
          <div class="form-group">
            <label>Celular</label>
            <input type="number" class="form-control" name="celular" placeholder="Ingresa el celular">
          </div>
          <div class="form-group">
            <label>Correo</label>
            <input type="text" class="form-control" name="correo" placeholder="Ingresar correo">
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="contrasena" placeholder="Ingresar contrasena">
          </div>
          <div class="form-group">
            <label>Confirmar Contraseña</label>
            <input type="password" class="form-control" name="confirmarcontrasena" placeholder="Confirmar contraseña">
          </div>
          </th>
         
               

            <center><input  type="button" class="btn btn-info" 
                    value="Enviar" 
                    onclick="return regformhash(this.form,
                                   this.form.tipo_usuario,
                                   this.form.correo,
                                   this.form.contrasena,
                                   this.form.confirmarcontrasena);" />
            </center>
        </div>

                </table> 
      </form>
    </div><!-- /row -->
  </section>
</section>
      

      <!--main content end-->
      <!--footer start-->
     
 

<?php include("footer_ad.php") ?>

<!--?php
} else {
        echo 'No esta autorizado para acceder a esta pagina. Por favor, inicie su sesion';
        echo '<p><a href=login.php>Reintentar</a></p>';
}
?-->

