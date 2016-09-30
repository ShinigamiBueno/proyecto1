<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla Requisicion Departamento
   	$idrequisicion_departamento=$_POST['idrequisicion_departamento'];
   	$requisicion_departamento_No_solicitud=$_POST['requisicion_departamento_No_solicitud'];
    $requisicion_fecha_formulacion_departamento=$_POST['requisicion_fecha_formulacion_departamento'];
   	$requisicion_fecha_requerimiento_departamento =$_POST['requisicion_fecha_requerimiento_departamento'];
   	$requisicion_hora_requerimiento_departamento=$_POST['requisicion_hora_requerimiento_departamento'];
   	$requisicion_termino_entrega_departamento=$_POST['requisicion_termino_entrega_departamento'];
   // $requisicion_nombre_articulo_departamento=$_POST['requisicion_nombre_articulo_departamento'];
    //$requisicion_cantidad_departemento=$_POST['requisicion_cantidad_departemento'];
   // $requisicion_unidad_departamento=$_POST['requisicion_unidad_departamento'];
    //$concepto_departamento=$_POST['concepto_departamento'];
    
   	echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
	if ($insert_stmt = $mysqli->prepare("INSERT INTO requisicion_departamento(idrequisicion_departamento,requisicion_departamento_No_solicitud,requisicion_fecha_formulacion_departamento,requisicion_fecha_requerimiento_departamento,requisicion_hora_requerimiento_departamento,requisicion_termino_entrega_departamento) VALUES (?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('isssss',$idrequisicion_departamento,$requisicion_departamento_No_solicitud,$requisicion_fecha_formulacion_departamento,$requisicion_fecha_requerimiento_departamento,$requisicion_hora_requerimiento_departamento,$requisicion_termino_entrega_departamento);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}
	}
}
?>