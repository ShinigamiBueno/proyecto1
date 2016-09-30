<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla Requisicion Departamento
   	$idrequisicion_mantenimiento=$_POST['idrequisicion_mantenimiento'];
   	$requisicion_mantenimiento_No_solicitud=$_POST['requisicion_mantenimiento_No_solicitud'];
    $requisicion_fecha_formulacion_mantenimiento=$_POST['requisicion_fecha_formulacion_mantenimiento'];
   	$fecha_requerimiento_mantenimiento=$_POST['fecha_requerimiento_mantenimiento'];
   	$hora_mantenimiento=$_POST['hora_mantenimiento'];
   	$requisicion_termino_entrega_mantenimiento=$_POST['requisicion_termino_entrega_mantenimiento'];
    //$requisicion_nombre_refacciones_mantenimento=$_POST['requisicion_nombre_refacciones_mantenimento'];
    //$requisicion_cantidad_mantenimiento=$_POST['requisicion_cantidad_mantenimiento'];
    //$requisicion_unidad_mantenimiento=$_POST['requisicion_unidad_mantenimiento'];
    //$requisicion_maquinaria_equiporeparar_mantenimiento=$_POST['requisicion_maquinaria_equiporeparar_mantenimiento'];
    //$requisicion_especificacion_refaccion_mantenimiento=$_POST['requisicion_especificacion_refaccion_mantenimiento'];
    
   	echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
	if ($insert_stmt = $mysqli->prepare("INSERT INTO requisicion_mantenimiento(idrequisicion_mantenimiento,requisicion_mantenimiento_No_solicitud,requisicion_fecha_formulacion_mantenimiento,fecha_requerimiento_mantenimiento,hora_mantenimiento,requisicion_termino_entrega_mantenimiento) VALUES (?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('isssss', $idrequisicion_mantenimiento,$requisicion_mantenimiento_No_solicitud,$requisicion_fecha_formulacion_mantenimiento,$fecha_requerimiento_mantenimiento,$requisicion_termino_entrega_mantenimiento,$hora_mantenimiento);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}
	}
}
?>