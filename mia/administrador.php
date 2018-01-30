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
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Ventana modal-->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	    <script src="js/main.js"></script>
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


 	   
 			<table bgcolor="#00ff00"; border="5" style="width:1880px;">
       

		        <tr>
		         	 <th style=width:18% text align="left"><h3>Alta Usuarios</h3> </th>
		         	 <th style=width:15% text align="left"><h3>Email</h3> </th>
		         	 <th style=width:15% text align="left"><h3>Contraseña </h3> </th>
		         	 <th style=width:9% text align="left"><h3>Teléfono Fijo</h3> </th>
		         	 <th style=width:9% text align="left"><h3>Teléfono Movil</h3> </th>
		         	 <th style=width:10% text align="left"><h3>Dni</h3> </th>
		         	 <th style=width:2%  text align="left"><h3>Rol</h3> </th>
		        	 <th style=width:7%  text align="left"><h3>Activos</h3> </th>
		         	 <th style=width:25% text align="center"><h3>Modificaciones</h3> </th>
		               
		        </tr>

   
		        <?php

		        /*recorremos los resultados y los mostramos por pantalla
		        la función substr devuelve parte de una cadena. A partir del segundo parámetro (aquí 0) devuelve tantos carácteres como el tercer parámetro (aquí 25)*/
		       
		        while ($prod = mysqli_fetch_array($datos)){

		        /* Con este primer td mostrara el nombre y apellidos del usuario en otra página administradorver.php ademas el email,password,telefono,dni,nivel,activo o no activo*/
		        echo "<td>";
		        echo "<a href='administradorver.php?id=$prod[id_usu]'>$prod[usu_nombre]&nbsp$prod[usu_apellido]</a>";
		        echo "</td>

		          		
		          		<td>" .substr($prod['usu_mail'], 0, 30) .  "</td>
		          		<td>" .substr($prod['usu_password'], 0, 35) .  "</td>
		          		<td>" .substr($prod['telefonofijo'], 0, 12) .  "</td>
		          		<td>" .substr($prod['telefono'], 0, 12) .  "</td>
		          		<td>$prod[dni]</td>
		          		<td>$prod[usu_nivel]</td>
		          		<td>$prod[usu_actiu]</td>
		          		
		          		
		          		<td>";
		           
				                     
				          //enlace a la página que modifica el producto pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            
				            echo  "<a href='administradormodificar.php?id=$prod[id_usu]'><i class='fa fa-pencil fa-2x fa-pull-left fa-border' title='modificar' style='color: red; margin-left: 25px;'></i></a>";
				          }
				 

				          //enlace a la página que elimina el producto pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            echo "<a href='administradoreliminar.php?id=$prod[id_usu]'><i class='fa fa-trash fa-2x fa-pull-left fa-border' title='borrar' style='color: red; margin-left: 25px;'></i></a>";
				          }

				          //enlace a la página que modifica el producto (poniendo el campo pro_actiu a 0 o a 1, lo activa o lo desactiva) pasándole la id (clave primaria)
				          if($prod['usu_actiu']==1){
				            echo "<a href='administradoractivar_desactivar.proc.php?id=$prod[id_usu]'><i class='fa fa-eye-slash fa-2x fa-pull-left fa-border' title='desactivar' style='color: red; margin-left: 25px;'></i></a>";
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


    


	</body>
</html>







		
				
			
