<?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';
    error_reporting(E_ALL ^ E_NOTICE);
    $page_title="Constructora";?>
    <?php include("header_ad.php") ?>
   
    <center>
      <h1>Realizar Transferenccia a un Banco</h1>
    </center>
  <div class="row">
    <center>
        <table>
            <form class="col-xs-4" method="post" action="registrar_transferencia.php">
              <?php
                  $idempresa=$_POST['idempresa'];
                  $consultar=$mysqli->query("SELECT empresa.representante_empresa,apellido_paterno_empresa,apellido_materno_empresa, banco.idbanco,tipo_banco from empresa,banco where empresa.idempresa=$idempresa and  banco.idbanco=$idempresa");
                  $dato=mysqli_fetch_array($consultar);
                  echo '<center>
                          <div class="col-md- col-md-offset-2">
                          <table  bgcolor="424a5d">
                            <td  bgcolor="424a5d" ><font size="6" color="white">Nombre: '.$dato['representante_empresa'].' '.$dato['apellido_paterno_empresa'].' '.$dato['apellido_materno_empresa'].'</font> 
                             </td>
                              <tr>
                            <td  bgcolor="424a5d" ><font size="6" color="white">Banco: '.$dato['tipo_banco'].'</font> 
                             </td> 
                          </table>
                        </div>
                        </center>';
                  echo ' <input type="hidden" name="idempresa" value='.$idempresa.'>';

                    $query1=$mysqli->query('SELECT idcuentas_fiscales from cuentas_fiscales');
                    $cuenta=mysqli_num_rows($query1);
                    $cuenta=$cuenta+1;
                    //echo $cuenta;
                    $cuenta=str_pad($cuenta,  3, "0", STR_PAD_LEFT);
                    $numero_folio='R'.$cuenta;
                    //echo $numero_folio;

                  
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
                
                 
              </th>
              <th width="200"><th>
              <th width="300">





              <div>
                <label>Seleccionar Bancos</label>

                    
       
                    <select class="form-control" name="idempresa">
                  </div>
                  <?php
                    $consultar=$mysqli->query('SELECT idempresa
                      ,representante_empresa,apellido_paterno_empresa,apellido_materno_empresa,idbanco FROM empresa');
                    while($dato=mysqli_fetch_array($consultar))
                    {
                     
                        echo '<option value='.$dato['idempresa'].'>'.$dato['representante_empresa'].' '.$dato['apellido_paterno_empresa'].' '.$dato['apellido_materno_empresa'].' '.$dato['tipo_banco'].'</option>';
                      
                    }
                    echo '</select>';
                    ?>
                </div>
              
           
            <div class="form-group">  
              <label>Ingresar Monto</label>
              <input type="text" class="form-control" name="monto"  placeholder="Ingrece Monto" required data-validation-required-message="Please enter a message.">
            </div>
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
