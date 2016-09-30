<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla caja mayor
    $idproveedor_pago_producto=$_POST['idproveedor_pago_producto'];
    $proveedorp_cantidad=$_POST['proveedorp_cantidad'];
    $proveedorp_pago=$_POST['proveedorp_pago'];
    $proveedorp_fecha=$_POST['proveedorp_fecha'];
    $proveedorp_factura=$_POST['proveedorp_factura'];
    
    echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO proveedor_pago_producto(idproveedor_pago_producto,proveedorp_cantidad,proveedorp_pago,proveedorp_fecha,proveedorp_factura) VALUES (?,?,?,?,?)")) {
    $insert_stmt->bind_param('issss', $idproveedor_pago_producto,$proveedorp_cantidad,$proveedorp_pago,$proveedorp_fecha,$proveedorp_factura);
    // Execute the prepared query.
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
?>