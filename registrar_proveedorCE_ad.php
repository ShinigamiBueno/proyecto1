<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla caja mayor
    $idproveedorCE=$_POST['idproveedorCE'];
    $proveedorCE_cantidad=$_POST['proveedorCE_cantidad'];
    $proveedorCE_entrada=$_POST['proveedorCE_entrada'];
    $proveedorCE_salida=$_POST['proveedorCE_salida'];
    $proveedorCE_devuelve=$_POST['proveedorCE_devuelve'];
    $proveedorCE_fecha=$_POST['proveedorCE_fecha'];
    $proveedorCE_monto=$_POST['proveedorCE_monto'];
    $proveedorCE_numeroRL=$_POST['proveedorCE_numeroRL'];
    $proveedorCE_banco=$_POST['proveedorCE_banco'];
    
    echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO proveedor_cambio_efectivo(idproveedorCE,proveedorCE_cantidad,proveedorCE_entrada,proveedorCE_salida,proveedorCE_devuelve,proveedorCE_fecha,proveedorCE_monto,proveedorCE_numeroRL) VALUES (?,?,?,?,?,?,?,?)")) {
    $insert_stmt->bind_param('isssssss', $idproveedorCE,$proveedorCE_cantidad,$proveedorCE_entrada,$proveedorCE_salida,$proveedorCE_devuelve,$proveedorCE_fecha,$proveedorCE_monto,$proveedorCE_numeroRL);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
?>