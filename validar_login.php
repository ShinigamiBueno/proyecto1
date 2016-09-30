
<?php
	require("includes/db_connect.php");
    include_once 'includes/functions.php';

    sec_session_start(); // Our custom secure way of starting a PHP session.
    $temp="";  
   
	if(isset($_POST['correo'], $_POST['p'])) { // comprobamos que se hayan enviado los datos del formulario
        // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
   
        if(empty($_POST['correo'])) {
          
            echo "El correo es incorrecto. <a href='javascript:history.back();'>Reintentar</a>";
        }else{
            //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $contrasena = $_POST['p']; // The hashed password.
            $correo = $_POST['correo'];
            $tipo_usuario = $_POST['tipo_usuario'];
 
            if(login($correo, $contrasena, $tipo_usuario,$mysqli) == true) {
  			 	
                if($tipo_usuario=="ad"){
				    echo "<script>location.href='header_ad.php'</script>";
				}elseif($tipo_usuario=="sb"){
                    echo "<script>location.href='header_subadministrador.php'</script>";
                }        
			} else {
                echo "Estoy aqui5";
                echo '<script language="javascript">window.location="error.php?err=La información ingresada es incorrecta (2)."</script>';
            }
        }
	} else {
        echo '<script language="javascript">window.location="error.php?err=No se puede procesar esos datos, favor de revisar."</script>';
    }
?>
                








  
   