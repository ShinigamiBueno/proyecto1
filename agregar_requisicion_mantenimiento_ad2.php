<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>

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
<?php

$requisicion_mantenimiento_No_solicitud=$_POST['requisicion_mantenimiento_No_solicitud'];
$fecha_requerimiento_mantenimiento=$_POST['fecha_requerimiento_mantenimiento'];
$requisicion_fecha_formulacion_mantenimiento=$_POST['requisicion_fecha_formulacion_mantenimiento'];
$hora_mantenimiento=$_POST['hora_mantenimiento'];
$cantidad=$_POST['cantidad'];
 $requisicion_termino_entrega_mantenimiento=$_POST['requisicion_termino_entrega_mantenimiento'];
      
            
?>
  
 <form class="col-xs-5" method="post" action="registrar_requisicion_mantenimiento_ad.php">
   
    <center>
        <button
         type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Requisición de Mantenimiento
        </button>
       </center>
      </div>
    <table border="0">

   <?php
     echo'
      
    <th width="200">
        <div class=form-group>
         <label>Número de Solicitud</label>
         <input type="text" class="form-control" name="requisicion_mantenimiento_No_solicitud1" value="'.$requisicion_mantenimiento_No_solicitud.'" disabled>



           <input type="hidden" class="form-control" name="requisicion_mantenimiento_No_solicitud" value="'.$requisicion_mantenimiento_No_solicitud.'">


        </div>
        
    </th>
      '; 
    ?>
    <th></th>
   
   <?php
     echo'
      <th width="100">
        <div class=form-group>
         <label>Fecha de Formulación</label>
         <input type="date" class="form-control" name="requisicion_fecha_formulacion_mantenimiento1" value="'.$requisicion_fecha_formulacion_mantenimiento.'" disabled>
          
         <input type="hidden" class="form-control" name="requisicion_fecha_formulacion_mantenimiento" value="'.$requisicion_fecha_formulacion_mantenimiento.'">

        </div>
        <div class= form-group>
         <label>Fecha de Requerimiento</label>
         <input type="date" class="form-control" name="fecha_requerimiento_mantenimiento1" value="'.$fecha_requerimiento_mantenimiento.'" disabled>

         <input type="hidden" class="form-control" name="fecha_requerimiento_mantenimiento" value="'.$fecha_requerimiento_mantenimiento.'">

          
        </div>  
      </th>';

  
    ?>
    <th></th>
    
    <?php
     echo'
      
    <th width="100">
        <div class=form-group>
         <label>Termino de entrega</label>
         <input type="text" class="form-control" name="requisicion_termino_entrega_mantenimiento1" value="'.$requisicion_termino_entrega_mantenimiento.'" disabled>

           <input type="hidden" class="form-control" name="requisicion_termino_entrega_mantenimiento" value="'.$requisicion_termino_entrega_mantenimiento.'">
        </div>

        <div class=form-group>
         <label>Hora</label>
         <input type="time" class="form-control" name="hora_mantenimiento1" value="'.$hora_mantenimiento.'" disabled>

           <input type="hidden" class="form-control" name="hora_mantenimiento" value="'.$hora_mantenimiento.'">
        </div>
        
    </th>
      '; 
    ?>
    
    <th></th>
    
    
    
      
       <tbody>
      
         <tr>
           <th>Clave</th>

           <th>Nombre del Articulo</th>
           <th>Cantidad</th>
           <th>Unidad</th>
           <th>Concepto</th>
        </tr>
      </th>


    
    <th></th>
    <?php
   for ($i=0; $i < $cantidad; $i++) { 
      echo '<tr>';
        echo '<td><input type="number" class="form-control" name="numero[]"  placeholder="Ingrese cantidad"></td>';
        echo '<td>
          <input type="text" class="form-control" name="requisicion_nombre_articulo_obra"  placeholder="Ingrese Nombre del Articulo"></td>';
        echo '<td>
         <input type="text" class="form-control" name="requisicion_cantidad_obra"  placeholder="Ingrese Cantidad"></td>';
          $consultar=$mysqli->query('SELECT idunidad, nombre_unidad FROM unidades');echo '<td><select class="form-control" name="tipo_usuario">';
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value='.$dato['idunidad'].'>'.$dato['nombre_unidad'].'</option>';
                }
              }
              echo '</select></td>';
         echo '<td>
           <div> 
           <input type="text" class="form-control" name="requisicion_concepto_obra"  placeholder="Ingrese Concepto">
           </div></td>';
        echo '</tr>';
                    }
                ?>
                <th></th>
      </tbody>           
    </table>
      <div>
      

 </form>
  </table>
     </div>
     </thead>
    </table>
  </section>
 </section>

<?php include("footer_ad.php") ?>

 