<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tienda Virtual editarusuario.proc.php</title>
	</head>

	<body>
		<?php
			
			//realizamos la conexión con mysql
			$con = mysqli_connect('localhost', 'root', '','montse');
			$sql = "UPDATE tbl_usuario SET usu_nombre='$_REQUEST[nombre]', usu_apellido='$_REQUEST[apellido]', usu_mail='$_REQUEST[mail]', telefonofijo='$_REQUEST[telefonofi]', telefono='$_REQUEST[telefonomov]', dni='$_REQUEST[dnii]' WHERE id_usu='$_REQUEST[id]'";

			//echo $sql;

			//lanzamos la sentencia sql
			$datos = mysqli_query($con, $sql);

			header("location: usuario.php")
		?>
	</body>

</html>	