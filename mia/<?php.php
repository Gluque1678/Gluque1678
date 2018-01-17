<!DOCTYPE html>
<!--Página editarusuario-->
<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo2.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    	<script> 
			
			function comprobarClave(){ 
			   	clave1 = document.f1.password.value 
			   	clave2 = document.f1.clave2.value 

			   	if (clave1 == clave2) 
			      	alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
			   	else 
			      	alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo") 
			} 
		</script> 
    	
       	
  	</head>
  
<body>


	<header>

		<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>	

	</header>

	

	<section>

		<!--FORMULARIO-->

		<article>


			
				<form name="f1" action="editarusuario.proc.php" method="POST" onsubmit="return validar();">
					


					<div class="alert alert-warning"><strong><h1><center>Rellena el Formulario</center></h1></strong>
					</div>

						<div class="alert alert-success" role="alert" style="margin-top: -16px;">
						<div class="alert-heading">
							  				
								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-primary" type="button">Nombre</button>
							      </span>
							      	<input type="text" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required class="form-control" placeholder="" 
							      	
							      	<span class="input-group-addon">
							        	 <span class="fa fa-user fa-lg" style="color: blue;"></span>
							      	</span>
							    </div>

								</br>

								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-success" type="button">Apellidos</button>
							      </span>
							      <input type="text" name="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required class="form-control" placeholder="" />
							      	<span class="input-group-addon">
							        	 <span class="fa fa-user fa-lg" style="color: green;"></span>
							      	</span>
							    </div>

							    </br>
							  
							  	<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-info" type="button">Correo</button>
							      </span>
							      <input type="text" name="mail" required class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="" />
							      	<span class="input-group-addon">
							        	<span class="fa fa-at fa-lg" style="color: #33FFEC;"></span>
							      	</span>
							    </div>

								</br>

								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-warning" type="button">Teléfono Fijo</button>
							      </span>
							      <input type="text" name="telefonofi" pattern="^[9|8|7|6]\d{8}$" required class="form-control" placeholder="" />
							      	<span class="input-group-addon">
							        	<span class="fa fa-phone fa-lg" style="color: #DCD415;"></span>
							      	</span>
							    </div>

								</br>

								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-secondary" type="button">Teléfono Móvil</button>
							      </span>
							      <input type="text" name="telefonomov" pattern="^[9|8|7|6]\d{8}$" required class="form-control" placeholder="" />
							      	<span class="input-group-addon">
							        	<span class="fa fa-phone fa-lg" style="color: black;"></span>
							      	</span>
							    </div>

							    </br>

								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-default" type="button">Dni</button>
							      </span>

							      <!--Recoge tanto nie como dni-->

							      <input type="text" name="dnii" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" required class="form-control" placeholder="" />
							      	<span class="input-group-addon">
							        	<span class="fa fa-newspaper-o fa-lg" style="color: black;"></span>
							      	</span>
							    </div>

								</br>

								<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-dark" type="button">Contraseña</button>
							      </span>
							      <input type="text" name="password" pattern="[A-Za-z0-9!?-]{8,12}" required class="form-control" placeholder="" />
							      	<span class="input-group-addon">
							        	 <i class="fa fa-lock fa-spin fa-xs fa-lg" style="color: black;"></i>
							        	 <span class="sr-only">Loading...</span>
							      	</span>
							    </div>

								</br>

							   	<input type="hidden" name="activo" value="1">

						
								<button type="submit" onclick="validar()" name="registro" class="btn btn-info btn-xs">
					        		 <span class="fa fa-floppy-o fa-2x" style="color: white;"></span> Registrar
					      		</button>

					     		<button type="button" class="btn btn-warning btn-xs" onclick="window.location.href='usuario.php'">
					       		  <span class="fa fa-caret-left fa-2x" style="color: black;"></span>
					       		   <a href="usuario.php">Volver</a>
					      		</button> 

						
						</div> 
						</div>

				</form>	  

				
  				

  				
		    <!--Paginacion
   
   			<div class="btn-group">
	         <button type="button" class="btn btn-info">4</button>
	         <button type="button" class="btn btn-warning">5</button>
	         <button type="button" class="btn btn-primary">6</button>
	         <button type="button" class="btn btn-danger">7</button>
	      	</div>-->



		</article>



	</section>
	
	<footer>

			<?php

				include "footer.php";

			?>




	</footer>


	<!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


</body>

</html>






<!--Página editarusuario.proc.php-->

<!DOCTYPE html>
<!--editarusuario.proc.php-->
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    	<!-- Ventana modal -->
    	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

<body>

	<?php
	
	/*Imagen Avatar
	
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="img/avatar/".$foto;
	copy($ruta, $destino);

	$nombre = mb_strtolower($_REQUEST['usu_nombre'], 'UTF-8');
	$apellidos = mb_strtolower($_REQUEST['usu_apellido'], 'UTF-8');
	$correo = mb_strtolower($_REQUEST['usu_mail'], 'UTF-8');*/

	//realizamos la conexión con mysql
	$con = mysqli_connect('localhost', 'root', '', 'montse');
	$sql =	"INSERT INTO tbl_usuario (usu_nombre, usu_apellido, usu_mail, telefonofijo, telefono, dni, usu_password, usu_actiu)
	VALUES ('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[mail]', '$_REQUEST[telefonofi]','$_REQUEST[telefonomov]', '$_REQUEST[dnii]', md5('$_REQUEST[password]'), 1)"; 


	echo $sql;
	//lanzamos la sentencia $sql
	$datos = mysqli_query($con, $sql);

	header("location: usuario.php");

?>	




</body>

</html>


