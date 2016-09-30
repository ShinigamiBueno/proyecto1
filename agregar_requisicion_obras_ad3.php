<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>

<?php include("header_ad.php") ?>
 <section id="main-content">
  <section class="wrapper">
   
     <center>
      <h1>Requisición Obras</h>
     </center>
  
<?php

$requisicion_fecha_requerimiento_obra=$_POST['requisicion_fecha_requerimiento_obra'];
$requisicion_obra_No_solicitud=$_POST['requisicion_obra_No_solicitud'];
$requisicion_fecha_formulacion_obra=$_POST['requisicion_fecha_formulacion_obra'];
$requisicion_hora_obra=$_POST['requisicion_hora_obra'];
$cantidad=$_POST['cantidad'];
$requisicion_termino_entrega_obra=$_POST['requisicion_termino_entrega_obra'];
   
$cantidad1=$_POST['cantidad1'];
$cantidad2=$_POST['cantidad2'];
$unidad=$_POST['unidad'];
$concepto=$_POST['concepto'];
$nombre_articulo=$_POST['nombre_articulo'];

echo '<table><tr><th>Núm.</th><th>Cantidad</th><th>Nombre</th><th>Concepto</th><th>Cantidad</th><th>Unidad</th></tr>';   
for ($i=0; $i < $cantidad; $i++) { 
  echo '<tr>';
  echo '<td>'.($i+1).'</td>';
  echo '<td>'.$cantidad1[$i].'</td>';
  echo '<td>'.$nombre_articulo[$i].'</td>';
  echo '<td>'.$concepto[$i].'</td>';
  echo '<td>'.$cantidad2[$i].'</td>';
  echo '<td>'.$unidad[$i].'</td>';
  echo '</tr>';

  if ($insert_stmt = $mysqli->prepare("INSERT INTO requisicion_obras(requisicion_obra_No_solicitud,requisicion_fecha_formulacion_obra,requisicion_fecha_requerimiento_obra,requisicion_hora_obra,requisicion_termino_entrega_obra,requisicion_nombre_articulo_obra,requisicion_cantidad_obra,requisicion_unidad_obra,requisicion_concepto_obra) VALUES (?,?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('sssssssss', $requisicion_obra_No_solicitud,$requisicion_fecha_formulacion_obra,$requisicion_fecha_requerimiento_obra,$requisicion_hora_obra,$requisicion_termino_entrega_obra,$nombre_articulo[$i],$cantidad1[$i],$unidad[$i],$concepto[$i]);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }

}
echo '</table>'
            
?>
  
  </section>
 </section>

<?php include("footer_ad.php") ?>

 