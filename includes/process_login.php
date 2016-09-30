<?php

/*
 * Copyright (C) 2013 peredur.net
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
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['correo'], $_POST['tipo_usuario'], $_POST['p'])) {
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $contrasena = $_POST['p']; // The hashed password.
    $tipo_usuario = filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_EMAIL);
    
    //if (login($email, $password, $tipo_usuario, $mysqli) == true) {
    if (login($correo, $contrasena, $tipo_usuario, $mysqli) == true) {
        // Login success 
        echo '<script language="javascript">window.location="../protected_page.php"</script>';
    } else {
        // Login failed 
        echo '<script language="javascript">window.location="../index.php?error=1. "</script>';
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo '<script language="javascript">window.location="../error.php?err=Could not process login. "</script>';
}