<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();

//conexion a la base de datos o mensaje en caso de error

$con = mysqli_connect("localhost", "root", "", "montse");

//si no se puede realizar la conexión, mostramos error
	if (!$con) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}	

?>

<!DOCTYPE html>

<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo1.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    	<!-- Ventana modal -->
    	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
  
  <body>

	<header>

		<!--el include menu de navegacion cabecera-->
		<?php include('headerUsu.php');
		?>	

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

		<div class="input-group">
			<span class="input-group-btn">
			<a href="editarusuario.php"> <button class="btn btn-primary" type="button" style="margin-top: -60px; margin-left: 480px; height: 35px;">Actualizar</button></a> 
			</span>
		</div>

		<br/><br/>

		<?php

		include "with-jquery.html";

		?>


		<!--INSERTAR CONTENIDO-->

		<?php

				
			//Realizamos la conexion

			include ('conexion.proc.php');


			//Sentencia para mostrar todos los materiales que dispone mi tienda de la tabla tbl_material

			$sql = ("select * from tbl_material")or die(mysql_error());

			//mostramos la consulta para ver por pantalla si es lo que esperábamos o o 
			//echo "$sql<br/>";

			//lanzamos la sentencia sql

			$datos = mysqli_query($con, $sql);

			$contador = mysqli_num_rows($datos);	

			echo "<div class='card-group'>";
			
			while ($prod = mysqli_fetch_array($datos)){ 

		
		?>							
							
						<div class="col-sm-4">
							<div class="card">	
								<img class="card-img-top" src="./img/material/<?php echo $prod['id_material']; ?>/<?php echo $prod['id_material'];?>.jpg" style="width:300px;height:300px" alt="">
								 				
								 <div class="card-body">
									<h4 class="card-title"><strong><?php echo utf8_encode($prod['nombre']);?></strong></h4>
									<p class="card-text"> <?php echo utf8_encode($prod['descripcion']);?> </p>
								 </div>
									    
								<div class="card-footer"><!--Se pasa la variable para que se vea el producto en detalles.php-->
										<h5><small class="text-primary"> Precio <?php echo $prod['precio'];?> €</small></h5>
										<a class="text-muted" href="detalles.php?producto=<?php echo $prod['id_material'] ?>">
											<button type="button" class="btn btn-primary">
												<h5>Mostrar Producto</h5>
											</button>
										</a>
								</div>
							</div>
						</div>	
				
			
	  		<?php }	 //fin while

	  		 ?>
				</div>

		</article> 
	</section>	

	<!-- Final de mostrar productos-->

	<aside>
	</aside>

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
    <script src="dist/js/bootstrap.min.js"></script>
    <!--Ventana modal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</body>

</html>

