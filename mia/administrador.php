<?php
	//iniciamos sesión - SIEMPRE TIENE QUE ESTAR EN LA PRIMERA LÍNEA
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
		<link rel="stylesheet" type="text/css" href="css/estilo5.css" media="screen">
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
		
		<!-- PÁGINA ADMINISTRADOR-->
		
		<?php

			//el include está comentado ya que en esta página no estamos accediendo a base de datos, de momento
			//include('conexion.proc.php');
			echo "<div id='arriba'>";

			if(isset($_SESSION['usu_mail'])){
				echo  "BIENVENIDO: " . $_SESSION['nombre'] .">";
				
				if($_SESSION['nivel']==1){
					echo "ERES ADMINISTRADOR!!";
					
					
					
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
		
		
		<section id="seccion">
			<article id="table">
				
	
		     <?php
		      //realizamos la conexión con mysql
		      $con = mysqli_connect('localhost','root','','montse');

		      //como la sentencia SIEMPRE va a buscar todos los registros de la tabla usuario, pongo en la variable $sql esa parte de la sentencia que SI o SI, va a contener
		      $sql = "SELECT * FROM tbl_usuario ORDER BY id_usu ASC";



		      //mostramos la consulta para ver por pantalla si es lo que esperábamos o no
		      //echo "$sql<br/>";

		      //lanzamos la sentencia sql
		      $datos = mysqli_query($con, $sql);

		      ?>


 	   
 			<table bgcolor="#00ff00"; border="1" style="width:1900px; <tbody>">
       

		        <tr>
		         	 <th style=width:15% text align="left"><h3>Alta Usuarios</h3> </th>
		         	 <th style=width:15% text align="left"><h3>Email</h3> </th>
		         	 <th style=width:15% text align="left"><h3>Contraseña </h3> </th>
		         	 <th style=width:10% text align="left"><h3>Teléfono</h3> </th>
		         	 <th style=width:10% text align="left"><h3>Dni</h3> </th>
		         	 <th style=width:8%  text align="left"><h3>Rol</h3> </th>
		        	 <th style=width:8%  text align="left"><h3>Activos</h3> </th>
		         	 <th style=width:35% text align="right"><h3>Modificaciones</h3> </th>
		               
		        </tr>

   
		        <?php

		        /*recorremos los resultados y los mostramos por pantalla
		        la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)*/
		       
		        while ($prod = mysqli_fetch_array($datos)){

		        echo "";
		        echo "<a href='administradorver.php?id=$prod[id_usu]'></a>";
		        echo "</td>

		          		<td>$prod[usu_nombre]&nbsp$prod[usu_apellido]&nbsp&nbsp&nbsp</td>
		          		<td>" .substr($prod['usu_mail'], 0, 25) .  "</td>
		          		<td>" .substr($prod['usu_password'], 0, 25) .  "</td>
		          		<td>$prod[telefono]</td>
		          		<td>$prod[dni]</td>
		          		<td>&nbsp&nbsp&nbsp$prod[usu_nivel]</td>
		          		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$prod[usu_actiu]</td>
		          		<td></td>
		          		
		          		<td>";
		           
				                     
				          //enlace a la página que modifica el producto pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            
				            echo  "<a href='administradormodificar.php?id=$prod[id_usu]'><i class='fa fa-pencil fa-2x fa-pull-left fa-border' title='modificar'></i></a>";
				          }
				 

				          //enlace a la página que elimina el producto pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            echo "<a href='administradoreliminar.php?id=$prod[id_usu]'><i class='fa fa-trash fa-2x fa-pull-left fa-border' title='borrar'></i></a>";
				          }

				          //enlace a la página que modifica el producto (poniendo el campo pro_actiu a 0 o a 1, lo activa o lo desactiva) pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            echo "<a href='administradoractivar_desactivar.proc.php?id=$prod[id_usu]'><i class='fa fa-eye-slash fa-2x fa-pull-left fa-border' title='desactivar'></i></a>";
				          } else {
				        
				        echo "</td>


		            <td><a href='administradoractivar_desactivar.proc.php?id=$prod[id_usu]'><i class='fa fa-eye fa-2x fa-pull-left fa-border' title='activar'></i></a>";
		          }

		          echo "</a><td>
		          </tr>";

		        }

		        ?>
     
     			 </br>
      		
      		</table>
  	  			
  	  			</br>
     		 <a href="administradorinsertar.php"><i class='fa fa-plus-square fa-2x fa-pull-left fa-border'></i></a> 

        	<?php
		      //cerramos la conexión con la base de datos
		      mysqli_close($con);
		    ?>
 
				
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
    <script src="dist/js/bootstrap.min.js"></script>
    <!--Ventana modal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	</body>
</html>







		
				
			
