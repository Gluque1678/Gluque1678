<?php
	
	//Imagen Avatar
	
	$foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="img/avatar/".$foto;
	copy($ruta, $destino);

	$nombre = mb_strtolower($_REQUEST['usu_nombre'], 'UTF-8');
	$apellidos = mb_strtolower($_REQUEST['usu_apellido'], 'UTF-8');
	$correo = mb_strtolower($_REQUEST['usu_mail'], 'UTF-8');

	//realizamos la conexión con mysql
	$con = mysqli_connect('localhost', 'root', '', 'montse');
	$sql =	"INSERT INTO tbl_usuario (usu_nombre, usu_apellido, usu_mail, telefono, dni, telefonofijo, usu_password, img, usu_actiu)
	VALUES ('$_REQUEST[nombre]', '$_REQUEST[apellido]', '$_REQUEST[mail]', '$_REQUEST[telefono]','$_REQUEST[dni]', '$_REQUEST[telefonofijo]', md5('$_REQUEST[password]'), '$foto', 1)"; 

	echo $sql;
	//lanzamos la sentencia $sql
	$datos = mysqli_query($con, $sql);

	header("location: index.php");

?>	

<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8"/>
		<title>Página de login Inicial</title>
		<meta name="autor" content="Germán Luque Sanchez,"/>
		<meta name="descripcion" content="Proyecto Germán tienda"/>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/.css" media="screen">
		<!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    	<!-- Ventana modal -->
    	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	</head>

<body>


</body>

</html>