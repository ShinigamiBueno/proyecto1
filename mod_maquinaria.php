<?php 
	
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


    $idmaquinaria=$_POST['idmaquinaria'];
	$clave_maquinaria=$_POST['clave_maquinaria'];
    $modelo_maquinaria=$_POST['modelo_maquinaria'];
    $num_serie_maquinaria=$_POST['num_serie_maquinaria'];
    $marca_maquinaria=$_POST['marca_maquinaria'];
    $tipo_combustible_maquinaria=$_POST['tipo_combustible_maquinaria'];
    $capacidad_litros_maquinaria=$_POST['capacidad_litros_maquinaria'];
    $filtro_diesel_maquinaria=$_POST['filtro_diesel_maquinaria'];
    $filtro_trampa_maquinaria=$_POST['filtro_trampa_maquinaria'];
    $filtro_hidraulico_maquinaria=$_POST['filtro_hidraulico_maquinaria'];
    $filtro_aceite_maquinaria=$_POST['filtro_aceite_maquinaria'];
    $filtro_aire_maquinaria=$_POST['filtro_aire_maquinaria'];
    $llanta_trasera_maquinaria=$_POST['llanta_trasera_maquinaria'];
    $llanta_delantera_maquinaria=$_POST['llanta_delantera_maquinaria'];
    $tipo_aceite_maquinaria=$_POST['tipo_aceite_maquinaria'];
	
	
	$query="UPDATE maquinaria SET clave_maquinaria='$clave_maquinaria',modelo_maquinaria='$modelo_maquinaria',num_serie_maquinaria='$num_serie_maquinaria',marca_maquinaria='$marca_maquinaria',tipo_combustible_maquinaria='$tipo_combustible_maquinaria',capacidad_litros_maquinaria='$capacidad_litros_maquinaria',filtro_diesel_maquinaria='$filtro_diesel_maquinaria',filtro_trampa_maquinaria='$filtro_trampa_maquinaria',filtro_hidraulico_maquinaria='$filtro_hidraulico_maquinaria',filtro_aceite_maquinaria='$filtro_aceite_maquinaria',filtro_aire_maquinaria='$filtro_aire_maquinaria',llanta_trasera_maquinaria='$llanta_trasera_maquinaria',llanta_delantera_maquinaria='$llanta_delantera_maquinaria',tipo_aceite_maquinaria='$tipo_aceite_maquinaria'  WHERE idmaquinaria='$idmaquinaria'";

//$query="UPDATE maquinaria SET clave_maquinaria='$clave_maquinaria' WHERE idmaquinaria='$idmaquinaria'";

	
	$resultado=$mysqli->query($query);
	
?>

<?php 
	$page_title="Constructora";?>
<?php include("header_ad.php") ?>
<html>
	<head>
		<title>Modificar Maquinaria</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				<h1>Felicidades</h1>
				<h1>Maquinaria Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Maquinaria</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="mostrar_maquinaria_ad.php">Regresar</a>
			
		</center>
	</body>
</html>
</body>
</html>
<?php include("footer_ad.php") ?>

				