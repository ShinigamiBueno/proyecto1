<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla caja mayor
    $idcajamenor=$_POST['idcajamenor'];
    $cajamenor_ciudad=$_POST['cajamenor_ciudad'];
    $cajamenor_fecha=$_POST['cajamenor_fecha'];
    $cajamenor_cantidad=$_POST['cajamenor_cantidad'];
    $cajamenor_pago=$_POST['cajamenor_pago'];
    $cajamenor_saldo=$_POST['cajamenor_saldo'];
    $cajamenor_concepto=$_POST['cajamenor_concepto'];
    
    echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO caja_menor(idcajamenor,cajamenor_ciudad,cajamenor_fecha,cajamenor_cantidad,cajamenor_pago,cajamenor_saldo,cajamenor_concepto) VALUES (?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('issssss', $idcajamenor,$cajamenor_ciudad,$cajamenor_fecha,$cajamenor_cantidad,$cajamenor_pago,$cajamenor_saldo,$cajamenor_concepto);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
?>