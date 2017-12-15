<?php

//conectamos con la base de datos
	$con = mysqli_connect("localhost", "root", "", "montse");

	$salida = "";
	$sql = "SELECT * FROM  tbl_material ORDER By id_material";

	if(isset($_POST['consulta'])){
		$q = $con->real_escape_string($_POST['consulta']);
		$sql = "SELECT id_tipo_material, descripcion, disponible FROM tbl_material 
				  WHERE descripcion LIKE '%" .$q. "%' OR disponible LIKE '%" .$q. "%'";

	//EJECUTAMOS LA CONSULTA

	$resultado = $con->sql($sql);
	if($resultado->num_rows > 0){

		$salida.="<table class='tabla_datos'>
			<thead>

				<tr>

					<td>ID</td>
					<td>descripcion</td>
					<td>disponible</td>
				</tr>
			</thead>
			<tbody>";

			while($fila= $resultado->fetch-assoc()){

				$salida.="<tr>
							
							<td>".$fila['ID']."</td>
							<td>".$fila['descripcion']."</td>
							<td>".$fila['disponible']."</td>
						 
						 </tr>";
			}

			$salida.="</tbody></table>";


			}	else {

						$salida.="No hay datos :(";


			}


			echo $salida;
			$mysqli->close();

	

?>

