
$(buscar_datos());


	
	$('#caja_busqueda').keyup(function(){
		var valor = $(this).val();
		if(valor != "  "){
			
			buscar_datos(valor);

		} else {
					buscar_datos();

		}

	});

function buscar_datos(consulta){
	$.ajax({

	url: 'mia/buscar.php',
	type: 'POST)',
	dataType: 'html',
	data:{consulta: 'consulta'},

	})

	.done(function(respuesta) {
		$("#datos").html(respuesta);

	})

	.fail(function() {
		console.log("error");
	})

}