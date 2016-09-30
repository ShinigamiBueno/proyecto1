<?php

/* 
 * Copyright (C) 2013 peter
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'db_connect.php';
include_once 'psl-config.php';

if (isset($_POST['tipo_usuario'], $_POST['correo'],$_POST['p'])) {
    // Sanitize and validate the data passed in
    echo "holla2";

    $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= 'La dirección de correo electrónico no es válida. ';
    }
    
    $contrasena = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($contrasena) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= 'Configuración inválida de contrasena/contraseña. ';
    }

    //Checar el correo o celular si ya están dados de alta
    $prep_stmt = "SELECT idusuario FROM usuario WHERE correo = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
    
    if ($stmt) {
        $stmt->bind_param('s', $correo);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= 'Un usuario con este correo ya existe. ';
        }
    } else {
        $error_msg .= 'Error de la base de datos Núm.1. ';
    }

    
    //Ahora se ira a Insertar al usuario que ya se considera válido
    if (empty($error_msg)) {
        $error_msg="";
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));
        $contrasena = hash('sha512', $contrasena . $random_salt);

        $nombre=$_POST['nombre'];
        $apellido_paterno=$_POST['apellido_paterno'];
        $apellido_materno=$_POST['apellido_materno'];
        $curp=$_POST['curp'];
        $estado=$_POST['estado'];
        $municipio=$_POST['municipio'];
        $colonia=$_POST['colonia'];
        $pais=$_POST['pais'];
        $codigo_postal=$_POST['codigo_postal'];
        $calle=$_POST['calle'];
        $numero_interior=$_POST['numero_interior'];
        $numero_exterior=$_POST['numero_exterior'];
        $telefono=$_POST['telefono'];
        $celular=$_POST['celular'];
        
        $time = time();
        date_default_timezone_set('America/Monterrey');
        $fecha1=date("Y-m-d ", $time);
        $hora1=date("H:i:s ", $time);
        // Insert the new user into the database                                                                                                                                                                                                                                           

        if ($insert_stmt = $mysqli->prepare("INSERT INTO usuario (tipo_usuario,nombre,apellido_paterno,apellido_materno,curp,estado,municipio,colonia,pais,codigo_postal,calle,numero_interior,numero_exterior,telefono,celular,correo,contrasena,salt,fecha_registro,hora_registro) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")) {
            $insert_stmt->bind_param('sssssssssisiiiisssss', $tipo_usuario,$nombre,$apellido_paterno,$apellido_materno,$curp,$estado,$municipio,$colonia,$pais,$codigo_postal,$calle,$numero_interior,$numero_exterior,$telefono,$celular,$correo,$contrasena,$random_salt,$fecha1,$hora1);
            if (! $insert_stmt->execute()) {
                echo '<script language="javascript">window.location="../proyecto1/error.php?err=Falló el registro del usuario a tabla usuario: INSERT1. "</script>';
            }
        }
        
        echo '<script language="javascript">window.location="../proyecto1/register_success.php"</script>';
    } else {
        echo '<script language="javascript">window.location="../proyecto1/error.php?err='.$error_msg.'"</script>';
    }
}

?>