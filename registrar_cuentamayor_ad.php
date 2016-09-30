<?php
include_once 'includes/db_connect.php';

if (isset($_POST['enviar'])) {
    //Aquí están las variables de la tabla cuenta_mayor
    $cuentamayor_periodo=$_POST['cuentamayor_periodo'];


    
        echo '<script type="text/javascript">alert("FELICIDADES TUS DATOS HAN SIDO REGISTRADOS CORRECTAMENTE");</script>';

    //Aquí está las la insert into para ingresar en la BD
    //Toda la información
  if ($insert_stmt = $mysqli->prepare("INSERT INTO cuentamayor(idcuentamayor,cuentamayor_periodo) VALUES (?,?)")) {
    $insert_stmt->bind_param('is', $idcuentamayor,$cuentamayor_periodo);
    // Execute the prepared query.

     echo $cuentamayor_periodo;
    if (! $insert_stmt->execute()) {
        echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
    }
  }
}
?>