<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";
  include("header_ad.php");
 

      if(isset($_POST['enviar'])){
      $nombre_constructora_proveedores=$_POST['nombre_constructora_proveedores'];
      $rfc_proveedores=$_POST['rfc_proveedores'];
      $domicilio_proveedores=$_POST['domicilio_proveedores'];
      $numero_cuenta_proveedores=$_POST['numero_cuenta_proveedores'];
      $clabe_interbancaria_proveedores=$_POST['clabe_interbancaria_proveedores'];
      $correo_proveedores=$_POST['correo_proveedores'];
      $idbanco=$_POST['idbanco'];

        echo " 
         <center>
            <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
            <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
         </center>";



      if ($insert_stmt = $mysqli->prepare("INSERT INTO proveedores(idproveedores,idbanco,nombre_constructora_proveedores,rfc_proveedores,domicilio_proveedores,numero_cuenta_proveedores,clabe_interbancaria_proveedores,correo_proveedores) VALUES (?,?,?,?,?,?,?,?)")) {
        $insert_stmt->bind_param('iissssss', $idproveedores,$idbanco,$nombre_constructora_proveedores,$rfc_proveedores,$domicilio_proveedores,$numero_cuenta_proveedores,$clabe_interbancaria_proveedores,$correo_proveedores);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) {
            echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
        }
      }

include("footer_ad.php");
    
}
?>