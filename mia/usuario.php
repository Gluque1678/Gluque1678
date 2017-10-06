<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<link rel="stylesheet" type="text/css" href="css/estilo1.css" media="screen">
		 <!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	</head>
  
  <body>

	</header>
	
		<nav class="navbar navbar-dark bg-dark">
			<!-- Navbar content -->
			<a href="index.php">INICIO</a>
			<a href="quienes.php">QUIENES SOMOS</a>
			<a href="hacemos.php">QUE HACEMOS</a>
			<a href="contactos.php">CONTACTOS</a>

			<form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="text" placeholder="Search">
     			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    		</form>
		
		</nav>

		
		

</header>   

    	
       	
    <section>          
	          
	     <article>  	  	
       
		<?php

			//el include está comentado ya que en esta página no estamos accediendo a base de datos, de momento
			//include('conexion.proc.php');
				
			 	
 		

				echo "<div class='alert alert-warning' role='alert'>";
				if(isset($_SESSION['usu_mail'])){
				echo  "BIENVENIDO: " . $_SESSION['nombre'] ."&nbsp"
									 . $_SESSION['apellido'] ."&nbsp";

							
				if($_SESSION['nivel']==1){
				echo "ERES ADMINISTRADOR!!";
				header("location: administrador.php");

					
					
				} elseif ($_SESSION['nivel']==2){
				echo "ERES USUARIO!!"; 
					
					
				} 
			} else {
				//como han intentado acceder de manera incorrecta, redirigimos a la página index.php con un mensaje de error
				$_SESSION['error']="No te saltes pasos!";
				header("location: index.php");
			}
				echo "</div>";

			

		?>

		<br/><br/>

		<?php

		include "with-jquery.html";

		?>




			</article> 

			<article> 

			<div class="card-group">
 			 	<div class="card">
	    			<img class="card-img-top" src="./img/gopro1.jpg" alt="">
	   				<div class="card-body">
		      			<h4 class="card-title">GoPro Hero Session</h4>
		      			<p class="card-text">texto go Pro.</p>
    				</div>
    
		    			<div class="card-footer">
		      				<small class="text-muted">texto de abajo</small>
		    			</div>
  				</div>


			<div class="card">
			    <img class="card-img-top" src="./img/radeon.jpg" alt="Imagen2">
			   	<div class="card-body">
			     	<h4 class="card-title">Radeon RX580</h4>
			    	 <p class="card-text">Texto portatiles.</p>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted">Texto de abajo</small>
			    </div>
			</div>
  
  			<div class="card">
    			<img class="card-img-top" src="./img/4b.jpg" alt="Imagen3">
    			<div class="card-body">
      				<h4 class="card-title">Graficas</h4>
      				<p class="card-text">Texto graficas.</p>
    			</div>
    				<div class="card-footer">
      					<small class="text-muted">Texto de abajo</small>
    				</div>
  				</div>
			</div>	


			</article>
		
		</section>	

		<aside>
		</aside>

		<footer>

			<div class="footer">
				<div class="footimg">
					<a href="https://facebook.com"><img src="./img/redessociales/facebook.png" width="64" height="64"></a>
					<a href="https://twitter.com"><img src="./img/redessociales/twitter.png" width="64" height="64"></a>
					<a href="https://pinterest.com"><img src="./img/redessociales/pinterest.png" width="64" height="64"></a>
					<a href="https://plus.google.com/?hl=es"><img src="./img/redessociales/google-plus.png" width="64" height="64"></a>
					<a href="https://info.com"><img src="./img/redessociales/info.png" width="64" height="64"></a>
				</div>
			</div>

			<a href="#" class="crunchify-top"><img src="img/botones/btt.png" style="float:right;" width="50px" height="50px"></a>

		</footer>


	



	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>

