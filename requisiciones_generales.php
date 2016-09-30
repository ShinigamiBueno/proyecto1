	<?php
	include_once 'includes/db_connect.php';
	include_once 'includes/functions.php';

	$page_title="Constructora";?>
	<?php include("header_ad.php") ?>

	<section id="main-content">
	 	<section class="wrapper">
	    <h3>
	      <center> <h1>Requisiciones</h1></center>
	    </h3>
	      <div class="row">
	        <center>
	          <table>
	            <form class="col-xs-4" method="post" action="registrar_vehiculo_ad.php">
	              <th width="300">
	              <br>
		<center>		
		<div class="btn-group">
  			<button type="button" class="btn btn-info dropdown-toggle"
		      data-toggle="dropdown">
				Seleccionar Requisición <span class="caret"></span>
  			</button>
 
			<ul class="dropdown-menu" role="menu">
				<li><a href="agregar_requisicion_obras_ad.php">Requisición Obras</a></li>
				<li class="divider"></li>
				<li><a href="agregar_requisicion_departamento_ad.php">Requisición Departamento</a></li>
				<li class="divider"></li>
				<li><a href="agregar_requisicion_mantenimiento_ad.php">Requisición Mantenimiento</a></li>
				<li class="divider"></li>
				<li><a href="#">Acción #4</a></li>
			</ul>
		</div>
		</center>


	         
	                  
	                  
	                </th>
	              




	

	                </table> 
	                </center>
	            </form>
	          </div>
	  </section>
	</section>

	<?php include("footer_ad.php") ?>