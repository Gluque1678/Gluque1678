<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<link rel="stylesheet" type="text/css" href="css/estilo11.css" media="screen">
		 <!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	</head>
    
	   
  <body>

	</header>
		<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>		
		</nav>	
	</header>   

    <main>	
       	
    	<section>  

    	</br>        
	          
	    	<article>  	  	
       
			<form name="f1" action="contactos_insert.proc.php" method="POST" onsubmit="return validar();">
			

				<div class="alert alert-warning"><strong><h1><center>Rellena el Formulario</center></h1></strong>
				</div>

				<div class="alert alert-success" role="alert" style="margin-top: -16px;">
				<div class="alert-heading">
					  				
						<div class="input-group">
					      <span class="input-group-btn">
					         <button class="btn btn-primary" type="button">Nombre</button>
					      </span>
					      	<input type="text" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required class="form-control" placeholder="" />
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
						  <div class="input-group-prepend btn btn-outline-secondary">
						    <span class="input-group-text">Comentario</span>
						  </div>
						  <textarea class="form-control" name="comentario" aria-label="With textarea"></textarea>
						</div>

						</br>      								   
				    

				    	<!--<div class="input-group">
					      <span class="input-group-btn">
					         <button class="btn btn-secondary" type="button">Foto</button>
					      </span>
					      <input type="file" name="foto" required id="foto" class="form-control" placeholder="" />
					      	<span class="input-group-addon">
					        	 <span class="fa fa-camera-retro fa-lg" style="color: black;"></span>
					      	</span>
					    </div>-->

					   

					   <!--<input type="hidden" name="activo" value="1">-->

				
						<button type="submit" onclick="validar()" name="registro" class="btn btn-danger btn-xs">
			        		 <span class="fa fa-floppy-o fa-2x" style="color: white;"></span> Enviar
			      		</button>

			     		<button type="button" class="btn btn-warning btn-xs" onclick="window.location.href='usuario.php'">
			       		  <span class="fa fa-caret-left fa-2x" style="color: black;"></span>
			       		   <a href="index.php">Volver</a>
			      		</button> 

			      
			</article> 
			
			<?php include('quienesfooter.php');
			?>	 
	
		</section>	


	
	</main>

	<aside>

	</aside>

	<footer>
	<!--el include el pie de página-->
	<?php include('footer.php');
		?>	
	</footer>

	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   	<script src="https: https://code.jquery.com/jquery-3.3.1.min.js"</script>
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</body>
</html>

