<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
  include("header_ad.php")
  #$page_title="Constructora";
  #error_reporting (0);
?>
  <center><h1>Mostrar Ingresos  Por Proyectos</h1></center>
    <div class="row">
      <center><table><form class="col-xs-4" method="post" action=""></center>
      <?php
        $idempresa = $_POST['idempresa'];
        $consultar2 = $mysqli->query('SELECT  representante_empresa,apellido_paterno_empresa,apellido_materno_empresa ,idbanco FROM empresa where idempresa='.$idempresa);
        $dato2 = mysqli_fetch_array($consultar2);
        $idbanco = $dato2['idbanco'];
        $consultar3 = $mysqli->query('SELECT * FROM banco where idbanco='.$idbanco);
        $dato3 = mysqli_fetch_array($consultar3);

                echo '<center>
                          <div class="col-md- col-md-offset-2">
                          <table  bgcolor="424a5d">
                            <td  bgcolor="424a5d" ><font size="6" color="white">Nombre: '.$dato2['representante_empresa'].' '.$dato2['apellido_paterno_empresa'].' '.$dato2['apellido_materno_empresa'].'</font>
                             </td>
                              <tr>
                            <td  bgcolor="424a5d" ><font size="6" color="white">Banco: '.$dato3['tipo_banco'].'</font>
                             </td>
                          </table>
                        </div>
                        </center>';

        ?>
        <div class = "row">
        <div class = "col-md-8 col-md-offset-2">
        <?php
           # ========== Esta es mi consulta donde realizo mis ingresos  ====================== #
          $query1 = "SELECT numero_folio,fecha,concepto,monto,referencia_obervacion FROM cuentas_fiscales  where iot='ingreso' and idempresa=".$idempresa;
          $resultado1 = $mysqli->query($query1);
          $row1 = mysqli_num_rows($resultado1);
          $col1 = mysqli_num_fields($resultado1);
          $suma = 0;
             # ========== Esta es mi consulta donde realizo mis egreso  ====================== #
          $query2="SELECT numero_folio,fecha,concepto,monto,referencia_obervacion FROM cuentas_fiscales where iot='egreso' and idempresa=".$idempresa;
          $resultado2=$mysqli->query($query2);
          $row2=mysqli_num_rows($resultado2);
          $col2=mysqli_num_fields($resultado2);

           # ========== Donde realizo mis comparaciones de mis ingresos y egresos ====================== #
          if ($row1>=$row2) {
            echo $mayor = $row1;
            echo $menor = $row2;
          } elseif ($row2 >= $row1) {
            echo $menor = $row1;
            echo $mayor = $row2;
          }
           # ========== Donde mando imprimir mis valores  ====================== #
          echo 'Ingresos';
          echo '<table border="1">';
          echo '<th bgcolor="khaki">NÃºmero de Folio</th>';
          echo '<th bgcolor="khaki">Fecha</th>';
          echo '<th bgcolor="khaki">Concepto </th>';
          echo '<th bgcolor="khaki">Monto </th>';
          echo '<th bgcolor="khaki">referencia Obervacion</th>';
          echo '<center><p>Egresos</p></center>';
          echo '<th bgcolor="khaki">NÃºmero de Folio </th>';
          echo '<th bgcolor="khaki">Fecha </th>';
          echo '<th bgcolor="khaki">Concepto </th>';
          echo '<th bgcolor="khaki">Monto Egreso</th>';
          echo '<th bgcolor="khaki">referencia Obervacion Egreso</th>';
           # ========== Donde van recorriendo mis datos  ====================== #
          for ($i=0; $i <$mayor; $i++) {
            echo '<tr>';
            $fila = mysqli_fetch_array($resultado1);
            $fila2 = mysqli_fetch_array($resultado2);

            for ($j = 0; $j < $col1; $j++) {
              echo '<td>';
              echo $fila[$j];
              echo '</td>';
            }

            for ($k = 0; $k < $col2; $k++) {
              echo '<td>';
              echo $fila2[$k];
              echo '</td>';
            }

            if ($suma == $j) {
              echo $suma;
            }

            echo $suma; //Resultado: 4
            echo  '</tr>';

          }

          echo '</table>';
          echo'<p>Total del Monto '.$suma.'</p>';

          # ====================================== Esta es mi parte de mis sumas  ======================================== #
          // Estos son los query para los montos en ingresos y egresos
          $query_monto = "SELECT monto FROM cuentas_fiscales where iot='ingreso' and idempresa=".$idempresa;
          $query_monto2 = "SELECT monto FROM cuentas_fiscales where iot='egreso' and idempresa=".$idempresa;

          //Aqui se ejecutan y almacenan ambos resultados
          $result_set = $mysqli->query($query_monto);
          $result_set2 = $mysqli->query($query_monto2);

          // Variables para almacenar la suma
          $sum = 0;
          $sum2 = 0;

          // El primer while recorre el primer resultado
          while($row = mysqli_fetch_assoc($result_set)) {
            // Por cada elemento del resultado (ya sabemos que obtuvo solo una columna)
            foreach($row as $value) {
              $sum += $value; // aquí se  agrega  el elemento actual a la variable sum
            }
          }

          // Analogo al while anterior pero con el resultado de los egresos
          while($row = mysqli_fetch_assoc($result_set2)){
            foreach($row as $value){
              $sum2 += $value;
            }
          }

          // Imprimimos ambas sumas
          echo "Suma Ingresos = ".$sum."<br>";
          echo "Suma Egresos = ".$sum2;
          # ====================================== CÃ³digo de la suma ======================================== #
        ?>
      </div>
    </div>

<?php include("footer_ad.php") ?>