

<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();?>
<?php error_reporting (0);?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

     <title><?php echo $page_title ?></title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <!--link href="assets/css/style.css" rel="stylesheet"-->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script type="text/JavaScript" src="assets/js/sha512.js"></script> 
    <script type="text/JavaScript" src="assets/js/forms.js"></script>

</head>

<body background="login5.jpg">

    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error al ingresar!</p>';
        }
    ?> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center><h1><font color="sky-blue">Constructora</font></h1></center>
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form method="post" action="validar_login.php" name="login_form">
                            <fieldset>

                      

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ingresa Correo Electronico" name="correo">
                                </div>
                                 
                                <div class="form-group">
                                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" >
                                </div>
                                <div>
                                    <select class="form-control" name="tipo_usuario">
                                      <option value="ad">Administrador</option>
                                      <option value="sb">Sub Administrador</option>
                                    </select>
                                </div>
                                <!--div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Guardar Contraseña
                                    </label>
                                </div-->
                                </br>
                                </br>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                        <center><input type="button" value="Ingresar" class="btn btn-primary" 
                                            onclick="return formhash(this.form,
                                                   this.form.contrasena);"></center>
                                </div>
                         
                            </fieldset>
                        </form>
                        </br>
                        </br>
                       
                        <?php
                            if($logged=="DENTRO"){
                                echo '<p>Puedes <a href="includes/logout.php">cerrar sesión</a>.</p>';
                                if($_SESSION['tipo_usuario']=="ad"){
                                    echo '<p>Puedes ir a tu <a href="administrador.php"> oficina virtual</a></p>';
                                }else{
                                    
                                } 
                            }
                        ?>
                        
                    </div>
                </div>

               
                </br>
                </br>
                <!--a href="www.sistefacil.net"-->
                
                </br>
                </br>
                <?php
                if($logged=="DENTRO"){
                    if ($_SESSION['tipo_usuario']=="ad") {
                        echo '
                            <a href="administrador.php">
                            <input type="button" class="btn btn-warning" value="OFICINA VIRTUAL"></a>
                            </br>
                            </br>
                            ';
                    }else{
                        
                    }
                }
                ?>
                </center>
            
                </br>
             
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>









</body>

</html>
