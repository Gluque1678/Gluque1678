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
		 <!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
      <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	     
	</head>

	<body>

	<!--Dentro del body va el header, menu nav(fuera del header), Despues el Section (Dentro Article1 y tb Article2)cerramos section Después aside( es el bloque de la derecha) y por último footer -->
	   
    <header>
        <div id="cabecera">          
			  <figure>
	          <a href="index.php"> <img src="img/cabecera/logo.png"></a>        
	          </figure>
	    	  
	    	  
		</div>

	</header>

    <nav> 
       <ul>
         <li>INICIO</li>
         <li>HISTORIA</li>
         <li>CONTACTO</li>
        </ul>
    </nav>


          	  <!--Registrarse el usuario, creo las sesiones-->


					<?php

					//session_start();
					//error_reporting(0);
					//$user_id = $_SESSION['id'];
					//$foto = $_SESSION['img'];
					//$nom_user = $_SESSION['nombre'];
					//$apellidos = $_SESSION['apellidos'];
					//$telf = $_SESSION['telefonono'];
					//$mail = $_SESSION['mail'];

					//include 'conexion.proc.php';

					//?>
					
					<div class="registrarse">
						<div class="login-form">
							<div class="prin-img" align="middle" style="margin-bottom: 10px;">
							</div>

							<button type="button" class="btn btn-primary btn-md"  onclick="window.location.href='usuarios_insert.php'">Registrarme</button>
						</div>
					</div>
					
					<!--?php
						}	//else 	{
					?>
					<h3> <?php echo "Bienvenido". $nom_user?></h3>

					<div class="perfilimg">
						<?php
							if($foto==null){
								echo '<input type="image" src="img/avatar/nodisponible.jpg" style="width: 68px; height: 68px;">';
								
							} 	else  {
								echo '<input type="image" src="img/avatar/' .$foto.'" style="width: 68px; height: 68px;">';

							}
						?>-->






     <section>

     	<article>			
			
			
			<div id="contenido">
				<div id="formCentro">


					<!--Formulario del Login -->

					<form id="formLogin" name="formLogin" action="login.proc.php" method="get">

							<p>Usuario:</p>	  
							<input id="user" class="user" type="email" name="mail" size="30" value="" autofocus required autocomplete="off">
							
							<p>Contraseña:</p>  
							<input id="pass" class="pass" type="password" name="pass" size="30" maxlength="10" value="" required autocomplete="off">

							<input type="submit" class="submit" class="btn btn-primary btn-md"  name="entrar" value="ENTRAR">
							<input type="reset" class="reset" class="btn btn-primary btn-md"  name="borrar" value="BORRAR">

										
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

		</article>
		
				
	</section>
	



		<br></br>

	<!--Aqui se pondria el aside que ocupara la parte derecha todo lo que ocupe el section -->
	<!--Aqui se pondria el footer que es la parte de abajo -->
		
	<!--<aside id="columna"> <hi></h1>
	</aside>-->
		
	<!--<footer id="pie">

			<h1><address><a href="http://AnimalesPerdidos.com"></a></address>
		
	</footer>-->

	</footer>

	
			<div class="footer">
				<div class="footimg">
					<a href="https://facebook.com"><img src="./img/redessociales/facebook.png" width="64" height="64"></a>
					<a href="https://twitter.com"><img src="./img/redessociales/twitter.png" width="64" height="64"></a>
					<a href="https://pinterest.com"><img src="./img/redessociales/pinterest.png" width="64" height="64"></a>
					<a href="https://plus.google.com/?hl=es"><img src="./img/redessociales/google-plus.png" width="64" height="64"></a>
					<a href="https://info.com"><img src="./img/redessociales/info.png" width="64" height="64"></a>
				</div>
			</div>

	</footer>


	<!--Optional JavaScript-->
    <!--jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
</body>

</html>