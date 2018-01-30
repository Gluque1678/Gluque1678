
$(document).ready(function(){

	//buscar socio
    $("#caja_busqueda").keyup(function(){
      var dato = $("#caja_busqueda").val();
    
      $.ajax({
          type: "post",
          url:  "buscar.php",
          data: 'valor='+socio,
          success: function(respuesta){
              //alert(respuesta);
              $("#div-mostrar-socios").html(respuesta);
              //$("#div-mostrar-socios").load("php/rellenar-socio.proc.php");
          },
        }); 
      return false;
    });
});
