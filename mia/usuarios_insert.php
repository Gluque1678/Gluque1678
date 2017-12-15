<!DOCTYPE html>

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
       	
  	</head>
  
<body>


	<header>

		<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>	

	</header>

	

	<section>

		<article>

		<div class="alert alert-warning"><strong><h1><center>Rellena el Formulario</center></h1></strong>
		</div>

		<div class="alert alert-success" role="alert" style="margin-top: -16px;">
			 <div class="alert-heading">
			  				
				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-primary" type="button">Nombre</button>
			      </span>
			      	<input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	 <span class="fa fa-user fa-lg" style="color: blue;"></span>
			      	</span>
			    </div>

				</br>

				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-success" type="button">Apellidos</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	 <span class="fa fa-user fa-lg" style="color: green;"></span>
			      	</span>
			    </div>

			    </br>
			  
			  	<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-info" type="button">Correo</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	<span class="fa fa-at fa-lg" style="color: #33FFEC;"></span>
			      	</span>
			    </div>

				</br>

				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-warning" type="button">Teléfono</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	<span class="fa fa-phone fa-lg" style="color: #DCD415;"></span>
			      	</span>
			    </div>

				</br>

				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-default" type="button">Dni</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	<span class="fa fa-newspaper-o fa-lg" style="color: black;"></span>
			      	</span>
			    </div>

				</br>

				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-dark" type="button">Contraseña</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	 <i class="fa fa-lock fa-spin fa-xs fa-lg" style="color: black;"></i>
			        	 <span class="sr-only">Loading...</span>
			      	</span>
			    </div>

				</br>

				<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-danger" type="button">Comprobar</button>
			      </span>
			      <input type="text" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	 <i class="fa fa-unlock fa-spin fa-lg fa-fw" style="color: red;"></i>
			        	 <span class="sr-only">Loading...</span>
			      	</span>
			    </div>


		    	</br>

		    	<div class="input-group">
			      <span class="input-group-btn">
			         <button class="btn btn-secondary" type="button">Foto</button>
			      </span>
			      <input type="file" class="form-control" placeholder="" />
			      	<span class="input-group-addon">
			        	 <span class="fa fa-camera-retro fa-lg" style="color: black;"></span>
			      	</span>
			    </div>

			    <input type="hidden" name="activo" value="1">

			    </br>

		
				<button type="button" class="btn btn-info btn-xs" >
	        		 <span class="fa fa-floppy-o fa-2x" style="color: white;"></span> Registrar
	      		</button>

	     		<button type="button" class="btn btn-warning btn-xs" onclick="window.location.href='index.php'">
	       		  <span class="fa fa-caret-left fa-2x" style="color: black;"></span>
	       		   <a href="index.php">Volver</a>
	      		</button> 

				
			</div> 
		</div>

			   
  				

  				
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