<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';

  $page_title="Constructora";?>
  <?php include("header_ad.php") ?>
    <center>
     <font size="8">MOSTRAR ADMINISTRADORES</font> 
    </center>     
      <table border="0" align="center">
        <tr>
            <form method="POST" action="buscador_administrador.php"> 
              <td>
                <h3>Buscar Administrador</h3>
                <p>
                  <input name="busca"  type="text" id="busqueda">
                  <input type="submit" name="Submit" value="buscar" />
                </p> 
              </td>
            </form> 
            <td width="145" align="center">Reporte Pdf<a href="reporte_administradores_ad_pdf.php"><img src="assets/img/pdf.png" width="30" height="25"/></a></td>
             <td width="145" align="center">Reporte Excel<a href="reporte_excel_administrador.php"><img src="assets/img/excel.png" width="30" height="25"/></a></td>
         </tr>
      </table>
      <?php
         $query="SELECT idusuario,nombre,apellido_paterno,apellido_materno,curp,estado,municipio FROM usuario";
        $resultado=$mysqli->query($query);
  
      ?>  
      <center>
        <table border=1 width="800">
          <thead>
            <tr >
              <th bgcolor="khaki">Nombre</th>
              <th bgcolor="khaki">Apellido Paterno</th>
              <th bgcolor="khaki">Apellido Materno</th>
              <th bgcolor="khaki">Curp</th>
              <th bgcolor="khaki">Estado</th>
              <th bgcolor="khaki">Municipio</th>
              <th bgcolor="khaki">Modificar</th>
              <th bgcolor="khaki">Eliminar</th>
               <?php
                while($filas=mysqli_fetch_array($resultado)){
                  echo '<tr>';
                  echo '<td   bgcolor="skyblue" >'.$filas['nombre'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_paterno'].'</td>';
                  echo '<td   bgcolor="skyblue" >'.$filas['apellido_materno'].'</td>';
                     echo '<td   bgcolor="skyblue" >'.$filas['curp'].'</td>';
                  echo '<td bgcolor="pink">'.$filas['estado'].'</td>';
                  echo '<td bgcolor="skyblue">'.$filas['municipio'].'</td>';
                  echo '
                      <td class="danger">
                        <a href="modificar_administrador.php?idusuario='.$filas['idusuario'].' " class="fa fa-pencil" ">Modificar</a>
                      </td>';
                  echo '
                      <td class="danger">
                        <a href="eliminar_administradores.php?idusuario='.$filas['idusuario'].' " class="fa fa-trash-o " ">Eliminar</a>
                      </td>';
                  echo '</tr>';
                }
              ?>
<?php include("footer_ad.php") ?>