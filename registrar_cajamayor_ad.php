<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla caja mayor
    $idcajamayor=$_POST['idcajamayor'];
    $cajamayor_cantidad=$_POST['cajamayor_cantidad'];
    $cajamayor_concepto=$_POST['cajamayor_concepto'];
    
    echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO caja_mayor(idcajamayor,cajamayor_cantidad,cajamayor_concepto) VALUES (?,?,?)")) {
    $insert_stmt->bind_param('iss', $idcajamayor,$cajamayor_cantidad,$cajamayor_concepto);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
?>