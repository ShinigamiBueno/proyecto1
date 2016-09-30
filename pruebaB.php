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
$requisicion_hora_requerimiento_obra=$_POST['requisicion_hora_requerimiento_obra'];
$requisicion_termino_entrega_obra=$_POST['requisicion_termino_entrega_obra'];
 $cantidad=$_POST['cantidad'];
            
?>
  
 <form class="col-xs-5" method="post" action="registrar_requisicion_obras_ad.php">
   
    <table border="2">

   <?php
     echo'
      
    <th width="200">
        <div class=form-group>
         <label>Número de Solicitud</label>
         <input type="text" class="form-control" name="requisicion_obra_No_solicitud" value="'.$requisicion_obra_No_solicitud.'" disabled>
        </div>
    </th>
      '; 
    ?>
    <th></th>
   
   <?php
     echo'
      <th width="100">
        
        <label>Fecha de Formulación</label>
        <input type="date" class="form-control" name="requisicion_fecha_formulacion_obra" value="'.$requisicion_fecha_formulacion_obra.'" disabled>
        <label>Fecha de Requerimiento</label>
        <input type="date" class="form-control" name="requisicion_fecha_requerimiento_obra" value="'.$requisicion_fecha_requerimiento_obra.'" disabled>  
      </th>';

  
    ?>
    <th></th>
    
   
    
      <?php
     echo'
     <th width="100">
        <label>Hora</label>
        <input type="time" class="form-control" name="requisicion_hora_requerimiento_obra" value="'.$requisicion_hora_requerimiento_obra.'" disabled>
        <label>Termino de entrega</label>
        <input type="text" class="form-control" name="requisicion_termino_entrega_obra" value="'.$requisicion_termino_entrega_obra.'" disabled>

      </th>';

  
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
      </th>';


    
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

 </form>
	</table>
     </div>
     </thead>
    </table>
  </section>
 </section>

<?php include("footer_ad.php") ?>

