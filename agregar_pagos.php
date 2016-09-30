<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

$page_title="Constructora";?>
<?php include("header_ad.php") ?>

<section id="main-content">
  <section class="wrapper">
    <h3>
      <center>
        <h1> Registrar Pagos </h1>
      </center>
    </h3>
         <div class="row">
         <center>
           <table>
            <form class="col-xs-4" method="post" action="">
                <th width="300">

<div class="container">
  <h2>Registrar Proyectos</h2>
  <p></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Municipio</th>
        <th>Empresa </th>
        <th>Obras</th>
        <th>Monto</th>
        <th>Saldo</th>
        <th>Facturas</th>
        <sele>
       


<?php
$sql= $mysqli->query("SELECT  * FROM municipio municipio inner join empresa nombre_constructora  ");
if (!(mysqli_num_rows($sql)>0)) {
  echo "NO tienes algo ";
} else {
  $contador=0;
  $error_msg=""; 
  while($filar=mysqli_fetch_array($sql)){
    $contador++;
    $municipio=$filar['municipio'];

    $idmunicipio=$filar['idmunicipio'];
     $idempresa=$filar['idempresa'];
        $empresa=$filar['empresa'];
        $nombre_constructora=$filar['nombre_constructora'];
    
    echo '
      <tr>

        <td>'.$municipio.'</td>';

     /* if ($stmt = $mysqli->prepare("SELECT nombre_constructora
          FROM empresa WHERE nombre_constructora = ? LIMIT 1")) {
        $stmt->bind_param('s',$nombre_constructora);  // Bind "$municipio" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
       

        // get variables from result.
        $stmt->bind_result($nombre_constructora);
        $stmt->fetch();
      }*/
    echo ' 
        <td>'.$nombre_constructora.'</td>  
        <td><label><input type="radio" name="idproyectos"></label></th>
      </tr>
    ';
  }
  echo '
    </table>
  ';
}
?>

      </tr>
    </thead>

    
  </table>
</div>

  </th>








          <center>
                    <button
                     type="submit" name="enviar" value="enviar" class="btn btn-info">
                     Registrar Pagos
                    </button>
              </center>  

                </table> 
                </center>
            </form>
          </div>
  </section>
</section>

<?php include("footer_ad.php") ?>
