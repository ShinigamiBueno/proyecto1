<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>






<?php
$sql= $mysqli->query("SELECT * FROM requisicion_obras WHERE bandera=0");
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
      <h1>Requisición Obras</h>
     </center>
      <div class="row">
        <table>
         <form class="col-xs-5" action="agregar_requisicion_obras_ad2.php" method="post" accept-charset="   UTF-8">
          <th width="300">
           <div class="form-group">
            <label>Número de Solicitud</label>
            <input class="form-control" type="text" id="requisicion_obra_No_solicitud" name="requisicion_obra_No_solicitud" value="<?php echo $rows ?>" placeholder="Ingrese No de Solicitud">  
           </div>
           <div class="form-group">
            <label>Fecha de Formulación</label>
            <input class="form-control" type="date" id="requisicion_fecha_formulacion_obra" name="requisicion_fecha_formulacion_obra">
           </div>
           <div class="form-group">
            <label>Fecha de Requerimiento</label>
            <input class="form-control" type="date" id="requisicion_fecha_requerimiento_obra" name="requisicion_fecha_requerimiento_obra">
           </div>
         </th>
         <th width="200"></th>
         <th width="300">
           <div class="=form-group">
            <label>Hora Requisición</label>
            <input class="form-control" type="time" id="requisicion_hora_obra" name="requisicion_hora_obra">
           </div>
           <div class="form-group">
            <label>Termino de entrega</label>
             <input class="form-control" type="text" id="requisicion_termino_entrega_obra" name="requisicion_termino_entrega_obra">
           </div>
            <div>
              <p>¿Cuántos productos deseas agregar?</p>
                <input class="form-control" type="number" name="cantidad" id="cantidad">
            </div>
         </th>
           <div>
             <center>
              <button
                  type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Requisición de Obra
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