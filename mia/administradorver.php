<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/estilo6.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS mas iconos font-awesome-->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    	<!-- Ventana modal -->
    	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

<body>



	<!--el include menu de navegacion cabecera-->
		<?php include('headeradministrador.php');
		?>	

	<br>

	<!-- PÁGINA ADMINISTRADOR VER ADMINISTRADORVER.PHP-->

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

	<table bgcolor="#00ff00"; border="5" style="width:1890px; text-align:center; margin-left:13px;">
					<tr>
						
						<th>Alta Usuarios</th>
						<th>Email</th>
						<th>Contraseña</th>
						<th>Teléfono</th>
						<th>DNI</th>
						<th>Rol</th>
						<th>Activo</th>
						
					</tr>

					<?php

					//recorremos los resultados y los mostramos por pantalla
					//la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)
					while ($prod = mysqli_fetch_array($datos)){
						
						echo "<tr>

						<td>$prod[usu_nombre]&nbsp$prod[usu_apellido]</td>
						<td>" . substr($prod['usu_mail'], 0, 30) . "</td>
						<td>" . substr($prod['usu_password'], 0, 35) . "</td>
						<td>" . substr($prod['telefono'], 0, 12) . "</td>
						<td>$prod[dni]</td>
						<td>$prod[usu_nivel]</td>
		          		<td>$prod[usu_actiu]</td>

							</tr>";

					}

					?>

	</table>

					<?php

						} else {
							echo "Usuario con id=$_REQUEST[id] no encontrado!";
						}
						//cerramos la conexión con la base de datos
						mysqli_close($con);
					?>

					<br/><br/>

					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary btn-sm" type="button" style="margin-top: -30px; margin-left: 15px;" onclick="window.location.href='administrador.php'">VOLVER</button>
						</span>
					</div>
					<a href="administrador.php">Volver</a>

	<footer>

			<?php
				include "footer.php";
			?>

	</footer>


</body>
</html>