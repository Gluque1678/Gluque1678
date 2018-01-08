<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios con datos en BD</title>
	</head>
	<body>
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
			         	 <th style=width:10% text align="left"><h3>Teléfono</h3> </th>
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
								<td>" . substr($prod['telefono'], 0, 12) . "</td>
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
		<a href="administrador.php">Volver</a>

	</body>
</html>