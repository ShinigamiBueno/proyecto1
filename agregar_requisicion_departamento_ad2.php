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
      <h1>Requisición Departamento</h>
     </center>
      <div class="row">
        <table>
<?php

$requisicion_departamento_No_solicitud=$_POST['requisicion_departamento_No_solicitud'];
$requisicion_fecha_requerimiento_departamento=$_POST['requisicion_fecha_requerimiento_departamento'];
$requisicion_fecha_formulacion_departamento=$_POST['requisicion_fecha_formulacion_departamento'];
$requisicion_hora_requerimiento_departamento=$_POST['requisicion_hora_requerimiento_departamento'];
$cantidad=$_POST['cantidad'];
 $requisicion_termino_entrega_departamento=$_POST['requisicion_termino_entrega_departamento'];
      
            
?>
  
 <form class="col-xs-5" method="post" action="registrar_requisicion_departamento_ad.php">
   
    <center>
        <button
         type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">Registrar Requisición de Departamento
        </button>
       </center>
      </div>
    <table border="0">

   <?php
     echo'
      
    <th width="200">
        <div class=form-group>
         <label>Número de Solicitud</label>
         <input type="text" class="form-control" name="requisicion_departamento_No_solicitud1" value="'.$requisicion_departamento_No_solicitud.'" disabled>



           <input type="hidden" class="form-control" name="requisicion_departamento_No_solicitud" value="'.$requisicion_departamento_No_solicitud.'">


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
         <input type="date" class="form-control" name="requisicion_fecha_formulacion_departamento1" value="'.$requisicion_fecha_formulacion_departamento.'" disabled>
          
         <input type="hidden" class="form-control" name="requisicion_fecha_formulacion_departamento" value="'.$requisicion_fecha_formulacion_departamento.'">

        </div>
        <div class= form-group>
         <label>Fecha de Requerimiento</label>
         <input type="date" class="form-control" name="requisicion_fecha_requerimiento_departamento1" value="'.$requisicion_fecha_requerimiento_departamento.'" disabled>

         <input type="hidden" class="form-control" name="requisicion_fecha_requerimiento_departamento" value="'.$requisicion_fecha_requerimiento_departamento.'">

          
        </div>  
      </th>';

  
    ?>
    <th></th>
    
    <?php
     echo'
      
    <th width="100">
        <div class=form-group>
         <label>Termino de entrega</label>
         <input type="text" class="form-control" name="requisicion_termino_entrega_departamento1" value="'.$requisicion_termino_entrega_departamento.'" disabled>

           <input type="hidden" class="form-control" name="requisicion_termino_entrega_departamento" value="'.$requisicion_termino_entrega_departamento.'">
        </div>

        <div class=form-group>
         <label>Hora</label>
         <input type="time" class="form-control" name="requisicion_hora_requerimiento_departamento1" value="'.$requisicion_hora_requerimiento_departamento.'" disabled>

           <input type="hidden" class="form-control" name="requisicion_hora_requerimiento_departamento" value="'.$requisicion_hora_requerimiento_departamento.'">
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

 