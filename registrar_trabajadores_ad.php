<?php
 include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";
  include("header_ad.php");

if (isset($_POST['enviar'])) {
   	$clave_trabajador=$_POST['clave_trabajador'];
    $nombre_trabajador=$_POST['nombre_trabajador'];
   	$apellido_paterno_trabajador=$_POST['apellido_paterno_trabajador'];
   	$apellido_materno_trabajador=$_POST['apellido_materno_trabajador'];
   	$curp_trabajador=$_POST['curp_trabajador'];
    $direccion_trabajador=$_POST['direccion_trabajador'];
    $colonia_trabajador=$_POST['colonia_trabajador'];
    $municipio_trabajador=$_POST['municipio_trabajador'];
    $estado_trabajador=$_POST['estado_trabajador'];
    $codigo_postal_trabajador=$_POST['codigo_postal_trabajador'];
    $telefono_trabajador=$_POST['telefono_trabajador'];
    $celular_trabajador=$_POST['celular_trabajador'];
    $correo_trabajador=$_POST['correo_trabajador'];
    $tipo_contrato_trabajador=$_POST['tipo_contrato_trabajador'];
    $sueldo_trabajador=$_POST['sueldo_trabajador'];
    $puesto_trabajador=$_POST['puesto_trabajador'];
    $departamento_trabajador=$_POST['departamento_trabajador'];
   echo " 
    <center>
    <font size=30>¡FELICITACIONES ! TU REGISTRO  FUE EXITOSO</font>
    <p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver atrás</a></p> 
    </center>"; 

 
	if ($insert_stmt = $mysqli->prepare("INSERT INTO trabajadores(idtrabajador,clave_trabajador,nombre_trabajador,apellido_paterno_trabajador,apellido_materno_trabajador,curp_trabajador,direccion_trabajador,colonia_trabajador,municipio_trabajador,estado_trabajador,codigo_postal_trabajador,telefono_trabajador,celular_trabajador,correo_trabajador,tipo_contrato_trabajador,sueldo_trabajador,puesto_trabajador,departamento_trabajador) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
		$insert_stmt->bind_param('isssssssssssssssss', $idtrabajador,$clave_trabajador,$nombre_trabajador,$apellido_paterno_trabajador,$apellido_materno_trabajador,$curp_trabajador,$direccion_trabajador,$colonia_trabajador,$municipio_trabajador,$estado_trabajador,$codigo_postal_trabajador,$telefono_trabajador,$celular_trabajador,$correo_trabajador,$tipo_contrato_trabajador,$sueldo_trabajador,$puesto_trabajador,$departamento_trabajador);
		// Execute the prepared query.
		if (! $insert_stmt->execute()) {
		    echo '<script language="javascript">window.location="../inicio/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
		}
	}
}
include("footer_ad.php");
?>