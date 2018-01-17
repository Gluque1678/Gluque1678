<?php 

session_start(); 


?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo7.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    </head>
  
	<body>

		<!--el include menu de navegacion cabecera-->
		<?php include('headeradministrador.php');
		?>	
		
		<!-- PÁGINA EDITARUSUARIO.PHP-->

		<section>

			<article>	

				<?php
					//realizamos la conexión con mysql
					$con = mysqli_connect('localhost','root', '','montse');

					//esta consulta devuelve todos los datos del producto cuyo campo clave (pro_id) es igual a la id que nos llega por la barra de direcciones
					$sql = "SELECT * FROM tbl_usuario WHERE id_usu=$_SESSION[id_usu]";

					//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
					//echo "$sql<br/>";

					//lanzamos la sentencia sql que devuelve el producto en cuestión
					$datos = mysqli_query($con, $sql);
					if(mysqli_num_rows($datos)>0){
					$prod=mysqli_fetch_array($datos);

				?>
				
				
					
					<form name="f1" action="editarusuario.proc.php" method="post">
						<input type="hidden" name="id" value="<?php echo $prod['id_usu']; ?>">

						<!--Aqui pondremos el formulario que queremos modificar-->
						
						</br>
						
						<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-primary" type="button">Nombre</button>
							      </span>
							      	
							      <input type="text" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" required class="form-control" placeholder="" 
							      value="<?php echo $prod['usu_nombre']; ?>"/>
							      	
							      <span class="input-group-addon">
							      	<span class="fa fa-user fa-lg" style="color: blue;"></span>
							      </span>
						</div>

						</br>

						<div class="input-group">
							      <span class="input-group-btn">
							         <button class="btn btn-success" type="button">Apellidos</button>
							      </span>
							      
							      <input type="text" name="apellido" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" required class="form-control" placeholder="" value="<?php echo $prod['usu_apellido']; ?>"/>
							      	<span class="input-group-addon">
							        	 <span class="fa fa-user fa-lg" style="color: green;"></span>
							      	</span>
						</div>

						</br>

						<div class="input-group">
							<span class="input-group-btn">
							    <button class="btn btn-info" type="button">Correo</button>
							</span>

							<input type="text" name="mail" required class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="" value="<?php echo $prod['usu_mail']; ?>"/>
							
							<span class="input-group-addon">
							   <span class="fa fa-at fa-lg" style="color: #33FFEC;"></span>
							</span>
						</div>

						
						</br>

						<div class="input-group">
					      <span class="input-group-btn">
					         <button class="btn btn-warning" type="button">Teléfono Fijo</button>
					      </span>
					      <input type="text" name="telefonofi" pattern="^[9|8|7|6]\d{8}$" required class="form-control" placeholder="" value="<?php echo $prod['telefonofijo']; ?>"/>
					      	<span class="input-group-addon">
					        	<span class="fa fa-phone fa-lg" style="color: #DCD415;"></span>
					      	</span>
					    </div>

					    </br>


						<div class="input-group">
							<span class="input-group-btn">
							    <button class="btn btn-secondary" type="button">Teléfono Móvil</button>
							</span>

							<input type="text" name="telefonomov" pattern="^[9|8|7|6]\d{8}$" required class="form-control" placeholder="" value="<?php echo $prod['telefono']; ?>"/>
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

							<input type="text" name="dnii" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" required class="form-control" placeholder="" value="<?php echo $prod['dni']; ?>"/>
							<span class="input-group-addon">
								<span class="fa fa-newspaper-o fa-lg" style="color: black;"></span>
							</span>
						</div>			

						</br>
					
						<button type="submit" class="btn btn-info btn-xs" value="Guardar">
					        <span class="fa fa-floppy-o fa-2x" style="color: white;"></span> Guardar
					    </button>

					    						   
						</br></br></br>
						    	
						</form>

						<?php
							
							} else {
							echo "tbl_usuario con id=$_REQUEST[id] no encontrado!";
									}
						//cerramos la conexión con la base de datos
						mysqli_close($con);
						
						?>
						
						

						<button type="button" class="btn btn-warning btn-xs" onclick="window.location.href='usuario.php'" style="margin-left: 140px; margin-top: -168px;">
					       <span class="fa fa-caret-left fa-2x" style="color: black;"></span>
					       <a href="usuario.php">Volver</a>
					    </button>

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