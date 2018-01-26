

<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
	session_start();

	
	//Realizamos la conexion

include ('conexion.proc.php');

$salida="";
$query = "select * from tbl_usuario ORDER BY id_usu";
	if(isset($POST['consulta'])){
		$q = $mysqli ->real_escape_string($_POST['consulta']);
		$query="SELECT id_usu, usu_nombre, usu_apellido, usu_mail, usu_password, telefonofijo, telefono, dni, usu_nivel, usu_actiu FROM tbl_usuario
		WHERE usu_nombre LIKE '%".$q."%'  
		      OR usu_apellido LIKE '%".$q."%' 
		      OR usu_mail LIKE '%".$q."%' 
		      OR usu_password LIKE '%".$q."%' 
		      OR telefonofijo LIKE '%".$q."%' 
		      OR telefono LIKE '%".$q."%' 
		      OR dni LIKE '%".$q."%' 
		      OR usu_nivel LIKE '%".$q."%' 
		      OR usu_actiu LIKE '%".$q."%'";

	}

	$resultado=$mysqli->query($query);
	if($resultado->num_rows >0) {$salida.="<table class='tabla_datos'>
		<thead>
			<tr>
				
				<td>Alta Usuarios</td>
				<td>Email/td>
				<td>Contraseña</td>
				<td>Teléfono Fijo</td>
				<td>Teléfono Movil</td>
				<td>Dni</td>
				<td>Rol</td>
				<td>Activos</td>

			</tr>
		</thead>	
		</body>";

	while($fila=$resultado->fetch_assoc()){

		$salida="<tr>
				
				 
				 <td>".$fila['usu_nombre']." ".$fila['usu_apellido']."</td>
				 <td>".$fila['usu_mail']."/td>
				 <td>".$fila['usu_password']."</td>
				 <td>".$fila['telefonofijo']."</td>
				 <td>".$fila['telefono']."</td>
				 <td>".$fila['dni']."</td>
				 <td>".$fila['usu_nivel']."</td>
				 <td>".$fila['usu_actiu']."</td>

				 </tr>";

	}	

	$salida.="</tbody></table>";


	} else {	$salida.="No hay datos: (";


	}

	echo $salida;
	$mysqli->close();


?>




	