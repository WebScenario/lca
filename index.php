<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Los Cuatro Ases</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
    

    <style>
    body {
        overflow: hidden!important;
    }
    .panel-container {

    }
    #panel {
        position:absolute;
        bottom:0;
        z-index: 100;
        display: none;
        /*background-color: #000000;*/
    } 

    /*html { 
      background: url(../img/blurred_home.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }*/
    /*html{
      background:url('../img/blurred_home.jpg') no-repeat center center;
      min-height:100%;
      background-size:cover;
    }
    body{
      min-height:100%;
    }*/

    .bg-image {
      z-index: -100;
      min-height: 100%;
      min-width: 1024px;
      
      width: 100%;
      height: auto;
      
      position: fixed;
      top: 0;
      left: 0;
    }

    .top-img {
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: relative;
        top: 0px;
        left: 0;
    }

    @media screen and (max-width: 1024px) {
      .bg-image {
        left: 50%;
        margin-left: -512px;
      }
      #panel {
        left: 50%;
        margin-left: -512px;        
      }
      .top-img {
        top: 60px!important;
      }
    }


    .home-button {
      position: absolute;
      top: 500px;
      left: 500px;
    }


    .btn-gallery {
      position: absolute;
      top: 50%;
      left:45%;
    }

}
    </style>
    
    
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

                <a class="navbar-brand" href="index.php">
                    <img alt="logo" src="images/logo.ico" class="img-responsive">
                    <span>LOS CUATRO ASES</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="index.php">INICIO</a></li>
                    
                    <!-- Submenu -->
                    <li id="itemInstitucional" class="dropdown liPadre">
                        <a id="linkInstitucional" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            INSTITUCIONAL <span class="caret"></span>
                        </a>  
                        <ul id="submenuHamburguesa" class="dropdown-menu" role="menu">
                            <li><a href="php/empresa.php">LA EMPRESA</a></li>
                            <li><a href="php/politicas.php">POL&Iacute;TICAS</a></li>
                            <li><a href="php/vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                        </ul>
                    </li>
                    
                    <li class="liPadre"><a href="php/contacto2.php">CONTACTO</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Submenu en pantalla mayor a xs -->
        <div id="subMenu" class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="liPadre"><a href="php/empresa.php">LA EMPRESA</a></li>
                    <li class="liPadre"><a href="php/politicas.php">POL&Iacute;TICAS</a></li>
                    <li class="liPadre"><a href="php/vision_mision.php">VISI&Oacute;N Y MISI&Oacute;N</a></li>
                </ul>
            </div>
        </div>
    </nav>









<!-- //////////////////////////////////// CONTENIDO /////////////////////////////////////////////////// -->

        <div id="panel">
            <img class="top-img" src="img/blurred_home.jpg" alt="">
        </div>
    <img class="bg-image" src="img/blurred_home.jpg" alt="">
    <a id="flip" href="#" class="btn btn-primary btn-gallery" role="button">Ver galeria</a>


    <!-- <button type="button" id="apretar">Apretar</button> -->















<!-- Default Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

<!-- Custom Scripts -->
         <!-- Submenu -->
        <script>
            $(document).ready(function(){
                $("#itemInstitucional").click(function(){
                    $("#subMenu").slideToggle();
                });
            });
        </script>

        <!-- Gallery -->
        <script>
            $(document).ready(function(){
                $("#flip").click(function(){
                    $("#panel").slideToggle({
                        direction: "up"
                    }, 300);
                });
            });
        </script>
    </body>
</html>
