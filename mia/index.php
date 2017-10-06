<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();
	//si existe la variable de sesión error, la guardamos en la variable error ya que al destruir la sesión, esta desaparecería
	if(isset($_SESSION ['error'])){
		$error=$_SESSION['error'];
	}
	//destruimos la sesión para no poder llegar de manera indirecta a ninguna página posterior a la de login
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<link rel="icon" type="image/png" href="img/icon.png">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
	</head>

	<body>


	<div id="barraNegra">
		<div id="barraLogin">
			<ul id="listaLogin">
				<li id="identificate"></li>
			</ul>
		</div>
	</div>
		   
    <header>
        <section id="cabecera">          
	          
	          <figure>
	            <a href="index.php"></a>   
	          </figure>

	          <figure2>
	          <a href="index.php"> <img src="img/comparativa.jpg"></a>        
	          </figure2>


          	  <nav> 
          	  	<ul>
          	  		<li>INICIO</li>
          	  		<li>HISTORIA</li>
          	  		<li>CONTACTO</li>
          	  	</ul>
          	  </nav>

        </section>

    </header>

			
	<main>

		
		<section id="centroLogin">
			
			<header id="headerLogin">
				<div id="headerCentro">
					<h2>INTRANET</h2>
				</div>
			</header>
				
			

			<div id="contenido">
				<div id="formCentro">


					<!--Formulario del Login -->

					<form id="formLogin" name="formLogin" action="login.proc.php" method="get">

					
								
						<p>Usuario:</p>	  
						<input id="user" class="user" type="email" name="mail" size="30" value="" autofocus required autocomplete="off">
						
						<p>Contraseña:</p>  
						<input id="pass" class="pass" type="password" name="pass" size="30" maxlength="10" value="" required autocomplete="off">

						<input type="submit" class="submit" name="entrar" value="ENTRAR">
						<input type="reset" class="reset" name="borrar" value="BORRAR">
					
					</form>

					</div>

						<div id="error"> 
							<p>
						
						
								<?php
									if(isset($error)){
										echo "<pan class=\"mensaje\">$error</span>";
										
										
									}
								?>	
							</p>
						
						</div>	

		<!--FIN FORMULARIO -->

				</div>
			</div>

			

	
		
				
		</section>
	</main>



		<br></br>

	<!--Aqui se pondria el aside que ocupara la parte derecha todo lo que ocupe el section -->
	<!--Aqui se pondria el footer que es la parte de abajo -->
		
		<!--<aside id="columna"> <hi></h1>
		</aside>-->
		
		<!--<footer id="pie">

			<h1><address><a href="http://AnimalesPerdidos.com"></a></address>
		
		</footer>-->
	
</body>

</html>