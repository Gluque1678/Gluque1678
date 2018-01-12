<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tienda Virtual administradormodificar</title>
	</head>

	<body>
		<?php
			
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost', 'root', '', 'montse');
			$sql = "UPDATE tbl_usuario SET usu_nombre='$_REQUEST[nombre]', usu_apellido='$_REQUEST[apellido]', usu_mail=$_REQUEST[mail], /*usu_password=$_REQUEST[password],*/ telefono=$_REQUEST[telefono], telefonofijo=$_REQUEST[telefono], dni=$_REQUEST[dni], WHERE id_usu=$_REQUEST[id]";

			//echo $sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: administrador.php")
		?>
	</body>

</html>	