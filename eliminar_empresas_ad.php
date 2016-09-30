<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

$id = $_POST['id'];

//ELIMINAMOS LA TABLA EMPRESA

$mysqli->query("DELETE FROM empresa WHERE idempresa = '$id'");

//ACTUALIZAMOS LOS REGISTROS 

$registro = $mysqli->query("SELECT * FROM empresa ORDER BY idempresa ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th>Nombre Constructora</th>
                <th>Clave empresa</th>
                <th>Codigo Postal</th>
                <th>RFC</th>
				<th>Numero Interior</th>
				<th>Número Exterior</th>
				<th>Domicilio</th>
				<th>Número Cuenta</th>
				<th>Clabe Interbancaria</th>
				<th>Correo</th>
            </tr>';
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nombre_contructora'].'</td>
				<td>'.$registro2['clave_empresa'].'</td>
				<td>S/. '.$registro2['codigo_postal_empresa'].'</td>
				<td>S/. '.$registro2['rfc'].'</td>
				<td>S/. '.$registro2['numero_interior_empresa'].'</td>
				<td>S/. '.$registro2['numero_exterior_empresa'].'</td>
				<td>S/. '.$registro2['domicilio'].'</td>
				<td>S/. '.$registro2['numero_cuenta'].'</td>
				<td>S/. '.$registro2['clabe_interbancdaria'].'</td>
				<td>S/. '.$registro2['correo'].'</td>


				<td><a href="javascript:editarEmpresa('.$registro2['idempresa'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarEmpresa('.$registro2['idempresa'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>