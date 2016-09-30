<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>






<?php
$sql= $mysqli->query("SELECT * FROM requisicion_departamento WHERE bandera=0");
 $row=$sql->num_rows;

if (!($row>0)) {

  echo "NO tienes algo ";
  }

 $row=$row+1;
 
 $rows=(string)$row;
for ($i=0; $i < (5-strlen($rows)); $i++) { 
   $rows="0".$rows;
}
$rows="R".$rows;
  //echo $rows;

?>


<?php include("header_ad.php") ?>
 <section id="main-content">
  <section class="wrapper">
   <table class="table" border="">
    <thead>
     <center>
      <h1>Requisición Departamento</h>
     </center>
      <div class="row">
        <table>
         <form class="col-xs-5" action="agregar_requisicion_departamento_ad2.php" method="post" accept-charset="   UTF-8">
          <th width="300">
            <div class="form-group">
              <label>No de Solicitud</label>
                <input type="text" class="form-control" name="requisicion_departamento_No_solicitud" value="<?php echo $rows ?>" placeholder="Ingrece No de Solicitud">
            </div>
            <div class="form-group">
              <label>Fecha de Formulación</label>
                <input type="date" class="form-control" name="requisicion_fecha_formulacion_departamento" placeholder="Ingrece Fecha de Formulación">
            </div>            
            <div class="form-group">
              <label>Fecha de Requerimiento </label>
              <input type="date" class="form-control" name="requisicion_fecha_requerimiento_departamento"  placeholder="Ingrece Fecha de Requerimiento">
            </div>
         </th>
         <th width="200"></th>
         <th width="300">
           <div class="form-group">
              <label>Hora de Requerimiento</label>
                <input type="time" class="form-control" name="requisicion_hora_requerimiento_departamento" placeholder="Ingrece Hora de Requerimiento">
            </div>           
            <div class="form-group">
              <label>Términos de Entrega</label>
              <input type="text" class="form-control" name="requisicion_termino_entrega_departamento" placeholder="Ingrece Terminos de Entrega">
            </div>
            <div>
              <p>¿Cuántos productos deseas agregar?</p>
                <input class="form-control" type="number" name="cantidad" id="cantidad">
            </div>
         </th>
           <div>
             <center>
              <button
                  type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Requisición de Departamento
              </button>
             </center>
           </div>
         </form>
        </table>
      </div>
    </thead>
   </table>
  </section>
 </section>
<?php include("footer_ad.php") ?>