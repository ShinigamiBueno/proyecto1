<?php
include_once 'includes/db_connect.php';
 


if(isset($_POST['enviar'])){
  //Aquí están las variables de la tabla empresa
  $idrequisicion_obra=$_POST['idrequisicion_obra'];
  $requisicion_obra_No_solicitud=$_POST['requisicion_obra_No_solicitud'];
  $requisicion_fecha_formulacion_obra=$_POST['requisicion_fecha_formulacion_obra'];
  $requisicion_termino_entrega_obra=$_POST['requisicion_termino_entrega_obra'];
  $requisicion_fecha_requerimiento_obra=$_POST['requisicion_fecha_requerimiento_obra'];
  $requisicion_hora_obra=$_POST['requisicion_hora_obra'];

     //Aquí está la inser into de la tabla empresa 
  if ($insert_stmt = $mysqli->prepare("INSERT INTO requisicion_obras(idrequisicion_obra,requisicion_obra_No_solicitud,requisicion_fecha_formulacion_obra,requisicion_fecha_requerimiento_obra,requisicion_hora_obra,requisicion_termino_entrega_obra) VALUES (?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('isssss',$idrequisicion_obra,$requisicion_obra_No_solicitud,$requisicion_fecha_formulacion_obra,$requisicion_fecha_requerimiento_obra,$requisicion_hora_obra,$requisicion_termino_entrega_obra);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    } 
  }
  
 
  

}



?>