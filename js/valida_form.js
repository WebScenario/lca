$(document).ready(function(){
			
		$("#enviar").click(verifica);	
			
		function verifica(){
				
				$("#resultado").fadeOut();
					
				$.ajax({
						type: 'post',
						url: '../php/php_valida/valida_po.php',
						data: $("#formu").serialize(), 
						beforeSend: function () {      
											  $("#resultado").html("Procesando, espere por favor...");
												},
						success: function(msj){
											   $("#resultado").toggle("slow",function(){ // se puede utilizar fadeOut o toggle
																						$("#resultado").html(msj);																				
																						});
											   }
											 
					});
			}
			
			
});

