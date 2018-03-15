<!--Por qué comprar-->

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
		<link rel="stylesheet" type="text/css" href="css/estilo10.css" media="screen">
		 <!-- Required meta tags -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	     <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  	</head>
  
  <body>

	</header>
	
		<!--el include menu de navegacion cabecera-->
		<?php include('header.php');
		?>	


			
	</header>   

    <main>	
       	
   		<section>          
	          
	     		<article>  	

		     		<img src="./img/compra/condicionescompra.jpg" class="img-fluid" style="width:380px;height:150px" alt=""> 	
		     		<img src="./img/compra/condicionescompra3.png" class="img-fluid" style="width:1400px;height:200px" alt="">
		     		
		     		<div class="container-fluid">

		     			<div class="alert alert-danger" role="alert">
						  <H6>Conoce toda la información relativa a tus envíos, devoluciones y garantías. ¡La información es poder! Echa un vistazo a nuestras Condiciones de Compra y adquiere tus artículos con la máxima confianza y tranquilidad.</H6>
						</div>
 
					</div>

	     			</br></br></br></br>

	     			<!-- Primer boton modal-->
	     			<a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 80px;">Condiciones generales de contratación</a>
					  						
					<!-- Segundo boton modal-->
	     			 <a href="#ventana2" class="btn btn-success btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;">Envios</a>
					 
					<!-- Tercer boton modal-->
	     			 <a href="#ventana3" class="btn btn-danger btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;">Devoluciones</a>     			
	     			 
	     			<!-- Cuarto boton modal-->
	     			 <a href="#ventana4" class="btn btn-info btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;"> Garantías</a>

	     			 <!-- Quinto boton modal-->
	     			 <a href="#ventana5" class="btn btn-warning btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;"> Formas de Pago</a>

	     			 <!-- Sexto boton modal-->
	     			 <a href="#ventana6" class="btn btn-dark btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;"> Protección de datos</a>

	     			<!-- Septimo boton modal-->
	     			 <a href="#ventana7" class="btn btn-primary btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;"> ¿Qué son las cookies?</a>

	     			 <!-- Octava boton modal-->
	     			 <a href="#ventana8" class="btn btn-secondary btn-lg" data-toggle="modal" style="margin-top: -180px; margin-left: 10px;"> ¿Que Cookies utiliza?</a>

	     			 
					
			     	<!-- Primera ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-primary text-white" id="exampleModalLabel">Las presentes Condiciones Generales de Contratación</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana1">
					        
							Ahora en adelante CGC, regulan las condiciones de compra de los diferentes productos ofrecidos en nuestra web: www.online electrónica.com
							(ahora en adelante ONLINE ELECTRÓNICA), sociedad española, CIF: B95801345, y ubicado en C/ CIENCIAS 64 1º LOCAL G C.P: 08907 (HOSPITALET DE LLOBREGAT)BARCELONA.– España.
							Los usuarios que realicen compras en www.online electrónica.com aceptan plenamente las presentes CGC y quedaran vinculados por estas, tal y como si fueran escritas en el momento de contratación/compra.
							Sera requisito indispensable la lectura y la aceptación de las CGC, con carácter previo a la compra de cualquier producto a través de www.online electrónica.com
							ONLINE ELECTRÓNICA, se reserva el derecho de modificar las CGC en cualquier momento y sin previo aviso. Las CGC estarán siempre accesibles a partir del sitio web, para que el usuario pueda consultarlas 
							o imprimirlas en cualquier momento.
							Los precios y condiciones de venta tienen un carácter meramente informativo y pueden ser modificados en atención a las fluctuaciones del mercado.
							No obstante, la realización del pedido mediante la cumplimentación del formulario de compra, implica la conformidad con el precio ofertado y con las condiciones generales de venta vigentes en ese concreto momento. 
							Una vez formalizado el pedido, se entenderá perfeccionada la compra de pleno derecho, con todas las garantías legales que amparan al consumidor adquirente y, desde ese instante, los precios y condiciones tendrán 
							carácter contractual y no podrán ser modificados sin el expreso acuerdo de ambos contratantes. 
							El Castellano será la lengua utilizada para formalizar el contrato. El documento electrónico en que se formalice el contrato se archivará y el usuario tendrá acceso a él en su zona de cliente.
					      
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>
	     	       
					</br></br>

					
					<!-- Segunda ventana modal Envios-->
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-success text-white" id="exampleModalLabel">Envios</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana2">

					      	Los plazos de entrega oscilan entre las 24 y las 72 horas a elección del cliente. No podemos garantizar estos plazos de entrega, si bien intentamos que las empresas de transporte los cumplan siempre que sea posible.
					      	En poblaciones rurales alejadas de núcleos urbanos no es posible garantizar en ningún caso la entrega en 24 horas.
							Los plazos de entrega dependerán de la disponibilidad de cada producto, la cual se encuentra indicada en todos y cada uno de los productos ofertados. En los pedidos que incluyan varios artículos se hará un 
							único envío y el plazo de entrega se corresponderá con el artículo cuyo plazo de entrega sea mayor.
							El cliente dispondrá de 72 horas para comprobar la integridad de todos los componentes del pedido y para comprobar que se incluye todo lo que debe en los productos incluidos. Pasadas estas 72 horas se dará por 
							aceptado el envío y no se aceptarán reclamaciones por desperfectos o fallos con el envío.
							Se considerará entregado un pedido cuando sea firmado el recibo de entrega por parte del cliente. Es en las próximas 24 horas cuando el cliente debe verificar los productos a la recepción de los mismos y exponer
							todas las objeciones que pudiesen existir.
							En caso de recibir un producto dañado por el transporte es recomendable contactarnos dentro de las primeras 24 horas para poder reclamar la incidencia a la empresa de transporte. De la misma forma es conveniente 
							dejar constancia a la empresa de transporte:
							
							

					 	  </div>
					      <div class="modal-footer">
					        
					        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>


					<!-- Tercera ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-danger text-white" id="exampleModalLabel">Devoluciones</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana3">
					        
						  Dispones de 30 días de plazo para devolver un producto desde que lo recibes en tu domicilio. Para ello, inicia sesión en www.online electrónica.com con tus datos de usuario,
						  entra en el área de cliente en la sección “Pedidos y facturas”, despliega el pedido correspondiente y selecciona el/los producto/s que quieras devolver.
						  Una vez recibamos el/los producto/s, te devolveremos el dinero según la forma de pago que hayas utilizado:
						  Si pagaste con tarjeta, el abono lo realizaremos en tu cuenta en un plazo de 48 a 72 horas.
						  Si pagaste por Paypal, el abono lo realizaremos en tu cuenta Paypal.
						  Si el pago lo hiciste por transferencia, te pediremos un número de cuenta para hacerte el abono. Ten en cuenta que pueden pasar hasta 48h hábiles hasta que se vea reflejado en tu cuenta bancaria.
						  Si pagaste por financiación, procederemos a realizar una cancelación total o parcial de la cantidad financiada según el caso.
						  Para el resto de las formas de pago, te solicitaremos un número de cuenta para hacerte el abono.
						  Sólo serás responsable de la disminución de valor de los bienes resultante de una manipulación de los mismos distinta a la necesaria para establecer su naturaleza, sus características o su funcionamiento.
						  Encontrarás más información sobre el proceso de devolución en el apartado “Quiero hacer una devolución” del Centro de Soporte.
						  Consulta nuestra política de devoluciones.
					      
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>

					
					       
					<!-- Cuarta ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-info text-white" id="exampleModalLabel">Garantias</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana4">
							Reparar o sustituir. El consumidor y usuario podrá ante el vendedor optar por la reparación o sustitución, salvo que una de las dos opciones resulte imposible o desproporcionada. Se considerará desproporcionada 
							la que tenga un coste superior. No se pueden sustituir los bienes no fungibles (cuando son de naturaleza específica)
							ni los de segunda mano. Tanto la reparación como la sustitución deben realizarse en un plazo de tiempo razonable y de manera totalmente gratuita para el consumidor. 
							NOTA: La garantía se podráa gestionar directamente con online electrónica, no obstante algunos fabricantes ofrecen la gestión directa de las averías/defectos/incidencias producidas en sus productos para dar un servicio 
							postventa de calidad y reducir los tiempos. En estos casos ONLINE ELECTRÓNICA le informará para que usted decida si tramitarla con nosotros o con ellos.
							Reducción del precio o resolución del contrato. Procederán cuando el consumidor y usuario no pueda exigir la reparación o sustitución y en los casos en los que no se hubiera llevado a cabo en un plazo razonable 
							o sin mayores inconvenientes para el consumidor y usuario. La resolución no procederá cuando la falta de conformidad sea de escasa importancia.
							* Tramitación de garantía de productos promocionales, packs o regalos. Si se trata de un regalo se sustituirá por otro igual o, en el caso de que no sea posible, de similar valor, nunca por dinero. Si se trata de
							un producto en promoción o pack, si no fuera posible la reparación o sustitución se procederá a reembolsar el importe equivalente, calculado teniendo en cuenta el precio real del producto y el descuento obtenido 
							por el cliente al adquirirlo en promoción.

					      
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>
					

					<!-- Quinta ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-warning text-dark" id="exampleModalLabel">Formas de Pago</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana5">
						-  Transferencias / Ingreso en cuenta:
 
						  Las cuentas disponibles son:

						  ES83 2038 9939 9760 0053 8629      - Bankia (transferencia e ingreso en ventanilla).
						  ES31 0049 1131 2128 9013 5423      - Santander Central Hispano (transferencia e ingreso en ventanilla).
						  ES90 2100 2758 8801 0018 3748      - La Caixa (transferencia e ingreso en ventanilla).

						  Titular de las cuentas: ONLINE ELECTRÓNICA.

						- PAYPAL
 
						Paypal es el líder global en pagos en línea y básicamente es un sistema de pago seguro en el cual el usuario abre una cuenta en el sistema que 
						posteriormente le permite realizar pagos en multitud de tiendas en línea alrededor del mundo, utilizando para ello su tarjeta de crédito o débito.

						Paypal será el único que tendrá sus datos bancarios siendo un intermediario ente usted y www.Online Electrónica.com Esta forma de pago es inmediata, en el 
						momento en el que usted realiza el pago, lo recibimos pasando a procesar su pedido (previa verificación de que los datos son correctos).
						 
						Para darse de alta u obtener más información visite www.paypal.es, sitio de Paypal para España o www.paypal.com sitio principal de Paypal (en inglés). 
						Estos vínculos son externos y enlazan a páginas con sus propias condiciones de uso y/o privacidad.

						Esta forma de pago anula el descuento preaplicado del 2,5% en los precios.

						- TARJETA DE CREDITO
 
						Esta forma es totalmente segura y verificada por VISA. Todos los pagos efectuados mediante esta forma de pago serán validados por su entidad bancaria 
						en caso de ser aceptados nos será remitido de forma automática e instantánea.
						Requiere de una clave de seguridad para poder realizar este tipo de pagos online. Consulte a su entidad bancaria si desconoce su clave de seguridad. 
						Se aceptan tarjetas VISA/ VISA Electron y MasterCard/Maestro. 

					    -  Pagos Fraccionados
 
						Paga tu compra en cómodos plazos de 3, 6 o 12 meses (coste en función del importe del pedido). La aprobación de la financiación se realiza totalmente 
						Online, 
						sin lentos formularios, papeleos o gestiones por parte del cliente. 

						Financiación disponible para pedidos superiores a 500 €.

						Si tiene alguna duda con el pago, puede contactar con nosotros al 931 76 00 08.

		      
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>

                  <!-- Sexta ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-dark text-white" id="exampleModalLabel">Protección de datos</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana6">
						Online Electrónica en conformidad con la Ley Orgánica 15/1999 de 13 de Diciembre de Protección de Datos de Carácter Personal, pretende informar a todos los usuarios acerca del tratamiento de datos sobre su persona, 
						recabados para llevar a cabo nuestra actividad comercial.

						La Ley Orgánica 15/1999 de 13 de Diciembre de Protección de Datos de Carácter Personal, en su TÍTULO II (PRINCIPIOS DE LA PROTECCIÓN DE DATOS), Artículo 5. (Derecho de información en la recogida de datos), 
						Apartado 1, establece que:

						"Los interesados a los que se soliciten datos personales deberán ser previamente informados de modo expreso, preciso e inequívoco:

						De la existencia de un fichero o tratamiento de datos de carácter personal, de la finalidad de la recogida de éstos y de los destinatarios de la información.
						Del carácter obligatorio o facultativo de su respuesta a las preguntas que les sean planteadas.
						De las consecuencias de la obtención de los datos o de la negativa a suministrarlos.
						De la posibilidad de ejercitar los derechos de acceso, rectificación, cancelación y oposición.
						De la identidad y dirección del responsable del tratamiento o, en su caso, de su representante.
						Cuando el responsable del tratamiento no esté establecido en el territorio de la Unión Europea y utilice en el tratamiento de datos medios situados en territorio español, deberá designar, salvo que tales medios 
						se utilicen con fines de tránsito, un representante en España, sin perjuicio de las acciones que pudieran emprenderse contra el propio responsable del tratamiento."
						Según la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de carácter personal, Online Electrónica informa que los datos personales facilitados de forma voluntaria al cumplimentar los diferentes 
						formularios y a través de la web (Online Electrónica.com), serán tratados con la máxima confidencialidad.
		      			El tratamiento de los datos está exclusivamente destinado a la finalidad de gestionar los pedidos solicitados a la Compañía y a responder a las consultas que los usuarios puedan formular.
						Todos los datos son recogidos para nuestra web, y puesto que tanto nuestra actividad, como el alojamiento y nuestro servidor se encuentran ubicados en territorio nacional, dichos datos nunca serán enviados 
						a otras páginas fuera de España.
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>

					<!-- Septima ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-primary text-white" id="exampleModalLabel">¿Qué son las cookies?</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana7">

					      	Una cookie es un método para mantener información de estado acerca de cómo navega el usuario por el site. Hay dos tipos de cookies:

							cookies permanentes
							cookies de sesión.

							Las cookies permanentes se almacenan por un periodo de tiempo que determina el servidor web cuando pasa la cookie al navegador. Estas cookies se 
							utilizan para guardar la información entre varias visitas al site.

							Las cookies de sesión se utilizan para almacenar la información de una sola sesión. Estas cookies están almacenadas en la caché sólo mientras el
							usuario está visitando la web y se borran de la caché cuando el usuario termina la sesión.
							
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>

					<!-- Octava ventana modal -->		
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ventana8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title p-3 mb-2 bg-secondary text-white" id="exampleModalLabel">¿Que Cookies utiliza Online Electrónica?</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-secondary" id="ventana7">
					      	Tal y como prevé el artículo 4 del Código ético de Protección de datos Personales en Internet, de la AECE, Online Electrónica informa que con respecto a la utilización de "cookies" en el ordenador del usuario,
					      	 este portal no recoge ni registra datos a través de éstas, siendo usadas exclusivamente para el control de la sesión, no conteniendo datos de carácter personal del visitante.

							Online Electrónica sólo utiliza cookies de sesión. Tenga en cuenta Si decide deshabilitar las Cookies no podremos ofrecerle algunos de nuestros servicios como, por ejemplo, permanecer identificado o mantener las 
							compras en su carrito.

							No obstante podra realizar dicha desactivacion siguiendo los siguientes enlaces:

							<a href="https://support.google.com/chrome/answer/95647?hl=es">Chrome, desde aquí</a>
							<a href="https://support.apple.com/kb/ph5042?locale=es_ES">Safari, desde aquí</a>
							<a href="https://support.microsoft.com/es-es/products/windows?os=windows-10">Explorer, desde aquí</a>
							<a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias?redirectlocale=es&redirectslug=habilitar-y-deshabilitar-cookies-que-los-sitios-we">Firefox, desde aquí</a>
							
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					       
					      </div>
					    </div>
					  </div>
					</div>

					<div class="alert alert-danger" role="alert" style="margin-top:-80px">
	  				<h1 class="card-title text-primary center">ARTÍCULOS DESTACADOS</H1>
					</div>

					<div class="card-group">
					  <div class="card">
					    <img class="card-img-top" src="./img/material/img9.jpg" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">MAC PRO</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">MAC PRO</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top"src="./img/material/img6.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">GO PRO HERO 5 SESSION</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">GO PRO HERO 5 SESSION</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="./img/material/img11.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">MACBOOK</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">MACBOOK</small>
					    </div>
					  </div>
					</div>

					<div class="card-group">
					  <div class="card">
					    <img class="card-img-top text-center" src="./img/material/img12.jpg" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">SAMSUNG TV</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">4K ULTRA HD</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top"src="./img/material/img13.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">SAMSUNG TV CURVO</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">CURVO ULTRA HD SMART 4K</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="./img/material/img14.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">SAMSUNG TV</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">4K UHD SMARTV WIFI</small>
					    </div>
					  </div>
					</div>

					</br></br></br></br>

					<div class="alert alert-danger" role="alert" style="margin-top:-80px">
	  				<h1 class="card-title text-primary center">NOVEDADES</H1>
					</div>

					<div class="card-group">
					  <div class="card">
					    <img class="card-img-top text-center" src="./img/material/img15.jpg" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">PC GAMMING MSI</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Intel Core i7-7700K 16GB</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top"src="./img/material/img16.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">GAMER PC </h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Intel I5 6600K 16GB </small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="./img/material/img17.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">SET GAMING</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Ordenador Teclado, Raton, Auriculares</small>
					    </div>
					  </div>
					</div>

					<div class="card-group">
					  <div class="card">
					    <img class="card-img-top text-center" src="./img/material/img18.jpg" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">AURICULARES GAMING</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Compatibles PS4, ordenador PC y Portátil</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top"src="./img/material/img19.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">BLUEDIO T2 PLUS</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Auriculares Bluetooth ranura SD radio FM</small>
					    </div>
					  </div>
					  <div class="card">
					    <img class="card-img-top" src="./img/material/img20.jpg" alt="Card image cap" style="width:300px;height:300px">
					    <div class="card-body">
					      <h5 class="card-title">ASUS ROG ORION</h5>
					      <p class="card-text"></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Auriculares con micrófono, altavoces neodimio</small>
					    </div>
					  </div>
					</div>

	     		<!--Con esto podemos traer cualquier variable a nuestra página las sesines se crean en login.proc-->
				<!--<?php echo $_SESSION['nombre']; ?>
				<?php echo $_SESSION['id_usu']; ?>-->
				

				<?php include('quienesfooter.php');
				?>	 

				</article> 
				
	
		</section>	


	</main>

	<aside>

	</aside>

	
	<footer>
	<!--el include el pie de página-->
	<?php include('footer.php');
		?>	
	</footer>

	
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


	
	 
</body>
</html>

