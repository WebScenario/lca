<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contacto - Los Cuatro Ases</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/estilo_contacto.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- Menu principal -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div id="menuPrincipal" class="container-fluid">
            <div class="navbar-header" maedia="min-witdh:1080px">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="../index.php">
                    <img alt="logo" src="../images/logo.ico" class="img-responsive">
                    <span>LOS CUATRO ASES</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="../index.php">INICIO</a></li>
                    
                    <!-- Submenu -->
                    <li id="itemInstitucional" class="dropdown liPadre">
                        <a id="linkInstitucional" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            INSTITUCIONAL <span class="caret"></span>
                        </a>  
                        <ul id="submenuHamburguesa" class="dropdown-menu" role="menu">
                            <li><a href="empresa.php">LA EMPRESA</a></li>
                            <li><a href="politicas.php">POL&Iacute;TICAS</a></li>
                            <li><a href="vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                        </ul>
                    </li>
                    
                    <li class="liPadre"><a href="contacto.php">CONTACTO</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Submenu en pantalla mayor a xs -->
        <div id="subMenu" class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="empresa.php">LA EMPRESA</a></li>
                    <li class="liPadre"><a href="politicas.php">POL&Iacute;TICAS</a></li>
                    <li class="liPadre"><a href="vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- //////////////////////////////////// CONTENIDO /////////////////////////////////////////////////// -->
    <!-- Mapa de google maps -->
	<div id="googleMap" style="width:100%;height:400px;"></div>
	
    <!-- Formulario de contacto -->
	<div class="container">
					  <h2>Formulario de Contacto</h2><hr />
						  <form role="form" method="post" id="formu" name="formu">
						  
						   <div class="form-group">
							   <label for="email">Email:</label>
							   <input type="email" class="form-control" id="email" name="email" placeholder="Ingresar email">
						   </div>
								
						   <div class="form-group">
						   	   <label for="asunto">Asunto:</label>
						   	   <input type="text" class="form-control" id="asunto"name="asunto" placeholder="Ingresar asutno">
						   </div>
								
						   <div class="form-group">
								<label for="commentario">Mensaje:</label>
								<textarea class="form-control" rows="5" id="commentario" name="msj" placeholder="Ingresar mensaje"></textarea>
						   </div>
								
							<button type="submit" class="btn btn-success" id="enviar" name="enviar">Enviar</button>
					 </form><br />
						  
					 <div class="alert alert-info" id="resultado" name="resultado" style="display: none;">
					</div><br /><br />
	</div>
    

<!-- ///////////////////////////////////// SCRIPTS //////////////////////////////////////////////////// -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
		
		<!--<script src="../js/valida_form.js"></script>-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- JQuery -->
        <script>
            $(document).ready(function(){
			
                <!-- JQuery para submenu -->
				$("#itemInstitucional").click(function(){
                    $("#subMenu").slideToggle();
                 // $("#itemInstitucional").css("background-color", "white");
                });
				
				<!-- JQuery para form -->
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
        </script>
        
        <!-- Google maps -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter= new google.maps.LatLng(-34.76962901102461, -58.473983799999985);
            
            function initialize() {
                var mapProp = {
                  center:myCenter,
                  zoom: 14,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker=new google.maps.Marker({
                  position:myCenter,
                  });

                marker.setMap(map);
            }

            // Carga el mapa
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
