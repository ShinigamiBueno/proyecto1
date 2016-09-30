<?php include("header_ad.php") ?>
 <section id="main-content">
  <section class="wrapper">
   <table class="table" border="">
    <thead>
     <center>
      <h1>En Espera</h>
     </center>
      <div class="row">

<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";



$consultar=$mysqli->query("select * from proyectos where status='Activo'");
$nfilas=mysql_num_rows($consultar);
echo '<form action="" method="POST">';
echo '<table>';
echo '<tr><th colspan="8"></th></tr>';
echo '<tr><td>Municipio</td><td>Empresa</td><td>Obras</td><td>Monto</td><td>Saldo</td><td>Factura</tr>';
for($i=0;$i<$nfilas;$i++)
{
    $fila = mysql_fetch_array($consultar);
    echo '<tr><td align="center">'.$fila['idmunicipio'].'</td><td align="center">'.$fila['idempresa'].'</td><td>'.$fila['idobras'].'</td><td>'.$fila['monto'].'</td><td>'.$fila['saldo'].'</td><td>'.$fila['factura_proyectos'].'</td><td align="center"><input type="checkbox" id="check" name="check[]" value="'.$fila['idproyectos'].'"></td></tr>';
}
echo '</table>';
echo '<br>';
echo '<input type="submit" name="enviar" value="Confirmar Proyecto Recibido">';
echo '</form>';

       

        
?>

 </div>
    </thead>
   </table>
  </section>
 </section>
<?php include("footer_ad.php") ?>