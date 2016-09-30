<?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    error_reporting(E_ALL ^ E_NOTICE);
    $page_title="Constructora";?>
    <?php include("header_ad.php") ?>
     <?php error_reporting (0);?>
   
    <center>
      <h1>Seleccionar Municipio</h1>
    </center>
  <div class="row">
    <center>
        <table>
            <form class="col-xs-4" method="post" action="registrar_ingresos.php">
                <?php
             $idmunicipio=$_POST['idmunicipio'];
              $consultar=$mysqli->query('SELECT idmunicipio,municipio FROM municipio where idmunicipio='.$idmunicipio);
              $dato=mysqli_fetch_array($consultar);
               echo '<center>
                          <div class="col-md- col-md-offset-2">
                          <table  bgcolor="424a5d">
                            <td  bgcolor="424a5d" ><font size="6" color="white">Nombre: '.$dato['municipio'].' </font> 
                             </td>
                              <tr>
                           
                          </table>
                        </div>
                        </center>';
 
             
              echo ' <input type="hidden" name="idmunicipio" value='.$idmunicipio.'>';

                $query1=$mysqli->query('SELECT idcuentas_fiscales from cuentas_fiscales');
                    $cuenta=mysqli_num_rows($query1);
                    $cuenta=$cuenta+1;
                    //echo $cuenta;
                    $cuenta=str_pad($cuenta,  3, "0", STR_PAD_LEFT);
                    $numero_folio='R'.$cuenta;
              ?>
               <div class="row">
              <div class="col-md-8 col-md-offset-2">
         <center>
           <table>
          
                <th width="300">
                  <div class="form-group">
                    <label>Número de Folio</label>
                    
                    <input type="text" class="form-control" name="numero_folio1"  value="<?php echo $numero_folio; ?>" placeholder="Ingresar Número de Folio" required data-validation-required-message="Please enter a message." disabled>
                    <?php
                    echo ' <input type="hidden" name="numero_folio" value='.$numero_folio.'>';
                    ?>
                    

                  </div>
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha" placeholder="Ingresar Fecha" required data-validation-required-message="Please enter a message.">
                  </div>  
                   <div class="form-group">
                    <label>Concepto</label>
                    <input type="text" class="form-control" name="concepto"  placeholder="Ingresar Concepto" required data-validation-required-message="Please enter a message.">
                  </div>
                    <div class="form-group">  
                     <label>Ingresar Monto</label>
                     <input type="text" class="form-control" name="monto"  placeholder="Ingrece Monto" required data-validation-required-message="Please enter a message.">
                    </div>

                
                 
              </th>
              <th width="200"><th>
              <th width="300">
              <div>
                    <label>Seleccionar Banco</label>
                    <select class="form-control" name="idempresa">
                  </div>
                  <?php
                    $idempresa=$_POST['idempresa'];
                    $consultar=$mysqli->query('SELECT empresa.idempresa,representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,banco.tipo_banco from empresa INNER JOIN  banco ON  banco.idbanco=empresa.idbanco');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                      if($dato['habilitado']==0){
                        echo '<option value='.$dato['idempresa'].'>'.$dato['representante_empresa'].' '.$dato['apellido_paterno_empresa'].' '.$dato['apellido_materno_empresa'].'  '.$dato['tipo_banco'].' </option>';
                      }
                      // echo ' <input type="hidden" name="idempresa" value='.$idempresa.'>';
                    }
                    echo '</select>';
                   
                    ?>
              </center>
              <div>
                    <label>Seleccionar Obras</label>
                    <select class="form-control" name="idobras">
                  </div>
                  <?php
                    
                    $consultar1=$mysqli->query('SELECT  idobras,nombre_obra,clave_obra FROM obras');
                    while($dato1=mysqli_fetch_array($consultar1))
                    {
                      if($dato['habilitado']==0){
                        echo '<option value='.$dato1['idobras'].'>'.$dato1['nombre_obra'].' clave: '.$dato1['clave_obra'].' </option>';
                      }
                    }
                    echo '</select>';
                   
                    ?>
              </center>
             
              
           
          

            <div class="form-group">
                  <label for="descripcion">Referencia Observación O Nota</label>
                  <textarea name="referencia_obervacion" class="form-control" placeholder="Ingrece Referencia Observaciones" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
            </div>

            </th>
            </div>
            </div>
           
            
           

            <center>
              <button
                type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-info">
                Seleccionar Banco
              </button>
            </center>
          </form>
        </table> 
      </center>
    </div>
       
<?php include("footer_ad.php") ?>
