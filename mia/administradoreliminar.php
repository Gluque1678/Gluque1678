<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo8.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    	<!-- Ventana modal -->
    	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>

		<!--el include menu de navegacion cabecera-->
		<?php include('headeradministrador.php');
		?>	

		</br>

		<section id="seccion">
			<article id="table">


			<?php
				//realizamos la conexión con mysql
				$con = mysqli_connect('localhost', 'root', '', 'montse');

				//esta consulta devuelve todos los datos del producto cuyo campo clave (pro_id) es igual a la id que nos llega por la barra de direcciones
				$sql = "SELECT * FROM tbl_usuario WHERE id_usu=$_REQUEST[id]";

				//mostramos la consulta para ver por pantalla si es lo que esperábamos o no
				//echo "$sql<br/>";

				//lanzamos la sentencia sql
				$datos = mysqli_query($con, $sql);
				if(mysqli_num_rows($datos)>0){
			
			?>
				
				<table bgcolor="#00ff00"; border="5" style="width:1880px;">
       

			        <tr>
			         	 <th style=width:20% text align="left"><h3>Alta Usuarios</h3> </th>
			         	 <th style=width:15% text align="left"><h3>Email</h3> </th>
			         	 <th style=width:15% text align="left"><h3>Contraseña </h3> </th>
			         	 <th style=width:9% text align="left"><h3>Teléfono Fijo</h3> </th>
			         	 <th style=width:9% text align="left"><h3>Teléfono Movil</h3> </th>
			         	 <th style=width:10% text align="left"><h3>Dni</h3> </th>
			         	 
			        </tr>

					<?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					$prod = mysqli_fetch_array($datos);
					
					echo "<tr>

								<td>$prod[usu_nombre]&nbsp$prod[usu_apellido]</td>
								<td>" . substr($prod['usu_mail'], 0, 30) . "</td>
								<td>" . substr($prod['usu_password'], 0, 35) . "</td>
								<td>" .substr($prod['telefonofijo'], 0, 12) .  "</td>
		          				<td>" .substr($prod['telefono'], 0, 12) .  "</td>  
								<td>$prod[dni]</td>
								

						</tr>";

					?>
					
						<tr>
						
							<td>Eliminar?</td>

							<td>
								<?php
								echo "<a href='administradoreliminar.proc.php?id=$prod[id_usu]'>Si</a>";
								?>
							</td>

							<td><a href="administrador.php">No</td>
					
						</tr>
				</table>

					<?php

						} else {
							echo "Producto con id=$_REQUEST[id] no encontrado!";
						}
						//cerramos la conexión con la base de datos
						mysqli_close($con);
					?>

				<br/><br/>
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button" style="margin-top: -40px; margin-left: 10px; height: 35px;" onclick="window.location.href='administrador.php'" >Volver</button>
					</span>
				</div>



			</article>	
		</section>

		<footer>

			<?php
				include "footer.php";
			?>

		</footer>

	</body>
</html>