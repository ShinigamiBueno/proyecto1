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

$requisicion_fecha_requerimiento_obra=$_POST['requisicion_fecha_requerimiento_obra'];
$requisicion_obra_No_solicitud=$_POST['requisicion_obra_No_solicitud'];
$requisicion_fecha_formulacion_obra=$_POST['requisicion_fecha_formulacion_obra'];
$requisicion_hora_obra=$_POST['requisicion_hora_obra'];

 $cantidad=$_POST['cantidad'];
 $requisicion_termino_entrega_obra=$_POST['requisicion_termino_entrega_obra'];
      
            
?>
  
 <form class="col-xs-5" method="post" action="agregar_requisicion_obras_ad3.php">
   
    <center>
        <button
         type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Requisición de Obra
        </button>
       </center>
      </div>
    <table border="0">

   <?php
     echo'
      
    <th width="200">
        <div class=form-group>
         <label>Número de Solicitud</label>
         <input type="text" class="form-control" name="requisicion_obra_No_solicitud1" value="'.$requisicion_obra_No_solicitud.'" disabled>



           <input type="hidden" class="form-control" name="requisicion_obra_No_solicitud" value="'.$requisicion_obra_No_solicitud.'">


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
         <input type="date" class="form-control" name="requisicion_fecha_formulacion_obra1" value="'.$requisicion_fecha_formulacion_obra.'" disabled>
          
         <input type="hidden" class="form-control" name="requisicion_fecha_formulacion_obra" value="'.$requisicion_fecha_formulacion_obra.'">

        </div>
        <div class= form-group>
         <label>Fecha de Requerimiento</label>
         <input type="date" class="form-control" name="requisicion_fecha_requerimiento_obra1" value="'.$requisicion_fecha_requerimiento_obra.'" disabled>

         <input type="hidden" class="form-control" name="requisicion_fecha_requerimiento_obra" value="'.$requisicion_fecha_requerimiento_obra.'">

          
        </div>  
      </th>';

  
    ?>
    <th></th>
    
    <?php
     echo'
      
    <th width="100">
        <div class=form-group>
         <label>Termino de entrega</label>
         <input type="text" class="form-control" name="requisicion_termino_entrega_obra1" value="'.$requisicion_termino_entrega_obra.'" disabled>

           <input type="hidden" class="form-control" name="requisicion_termino_entrega_obra" value="'.$requisicion_termino_entrega_obra.'">
        </div>

        <div class=form-group>
         <label>Hora</label>
         <input type="time" class="form-control" name="requisicion_hora_obra1" value="'.$requisicion_hora_obra.'" disabled>

           <input type="hidden" class="form-control" name="requisicion_hora_obra" value="'.$requisicion_hora_obra.'">
        </div>
        

      <input type="hidden" class="form-control" name="cantidad" value="'.$cantidad.'">

    </th>
      '; 
    ?>
    
    <th></th>
    
    
    
      
       <tbody>
      
         <tr>
           <th>Cantidad</th>
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
        echo '<td><input type="number" class="form-control" name="cantidad1[]"  multiple="multiple" placeholder="Ingrese cantidad"></td>';
        
        echo '<td>
          <input type="text" class="form-control" name="nombre_articulo[]"  placeholder="Ingrese Nombre del Articulo"></td>';
        echo '<td>
         <input type="text" class="form-control" name="cantidad2[]"  placeholder="Ingrese Cantidad"></td>';
          $consultar=$mysqli->query('SELECT idunidad, nombre_unidad FROM unidades');
        echo '<td><select class="form-control" name="unidad[]">';
              while($dato=mysqli_fetch_array($consultar))
              {
                if($dato['habilitado']==0){
                  echo '<option value='.$dato['nombre_unidad'].'>'.$dato['nombre_unidad'].'</option>';
                }
              }
              echo '</select></td>';
         echo '<td>
           <div> 
           <input type="text" class="form-control" name="concepto[]"  placeholder="Ingrese Concepto">
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

 