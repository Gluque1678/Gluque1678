<!--Por qué comprar-->

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
	
		<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>	


			
	</header>   

    <main>	
       	
   		<section>          
	          
	     		<article>  	

		     		<img src="./img/compra/condicionescompra.jpg" class="img-fluid" style="width:380px;height:150px" alt=""> 	
		     		<img src="./img/compra/condicionescompra3.png" class="img-fluid" style="width:1400px;height:200px" alt="">
		     		
		     		<div class="container-fluid">

		     			<div class="alert alert-danger" role="alert">
						  <H6>Conoce toda la información relativa a tus envíos, devoluciones y garantías. ¡La información es poder! Echa un vistazo a nuestras Condiciones de Compra y adquiere tus artículos con la máxima confianza y tranquilidad.</H6>
						</div>
 
					</div>

	     	</br></br></br></br>


	     	
       
				</br></br></br></br>



	     		<!--Con esto podemos traer cualquier variable a nuestra página las sesines se crean en login.proc-->
				<!--<?php echo $_SESSION['nombre']; ?>
				<?php echo $_SESSION['id_usu']; ?>-->
				

				<?php include('quienesfooter.php');
				?>	 


				</article> 
				
	
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


	
	 
</body>
</html>

