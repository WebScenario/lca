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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script> 


        <!-- Inicio galeria -->
        <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
        
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        
        <script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
        
        <script type="text/javascript">
            
            jQuery(function($){
                
                $.supersized({
                
                    // Functionality
                    slideshow               :   1,          // Slideshow on/off
                    autoplay                :   0,          // Slideshow starts playing automatically
                    start_slide             :   1,          // Start slide (0 is random)
                    stop_loop               :   0,          // Pauses slideshow on last slide
                    random                  :   0,          // Randomize slide order (Ignores start slide)
                    slide_interval          :   3000,       // Length between transitions
                    transition              :   4,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed        :   1000,       // Speed of transition
                    new_window              :   1,          // Image links open in new window/tab
                    pause_hover             :   0,          // Pause slideshow on hover
                    keyboard_nav            :   1,          // Keyboard navigation on/off
                    performance             :   1,          // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
                    image_protect           :   1,          // Disables image dragging and right click with Javascript
                                                               
                    // Size & Position                         
                    min_width               :   0,          // Min width allowed (in pixels)
                    min_height              :   0,          // Min height allowed (in pixels)
                    vertical_center         :   1,          // Vertically center background
                    horizontal_center       :   1,          // Horizontally center background
                    fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait            :   1,          // Portrait images will not exceed browser height
                    fit_landscape           :   0,          // Landscape images will not exceed browser width
                                                               
                    // Components                           
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links             :   1,          // Individual thumb links for each slide
                    thumbnail_navigation    :   0,          // Thumbnail navigation
                    slides                  :   [           // Slideshow Images
                                                        {image : 'img/blurred_home.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-1.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-1.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-2.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-2.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/kazvan-3.jpg', title : 'Image Credit: Maria Kazvan', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/kazvan-3.jpg', url : 'http://www.nonsensesociety.com/2011/04/maria-kazvan/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-1.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-1.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-1.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-1.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-2.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-2.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-2.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-2.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/wojno-3.jpg', title : 'Image Credit: Colin Wojno', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/wojno-3.jpg', url : 'http://www.nonsensesociety.com/2011/03/colin/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-1.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-1.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-2.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-2.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'},
                                                        {image : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/slides/shaden-3.jpg', title : 'Image Credit: Brooke Shaden', thumb : 'http://buildinternet.s3.amazonaws.com/projects/supersized/3.2/thumbs/shaden-3.jpg', url : 'http://www.nonsensesociety.com/2011/06/brooke-shaden/'}
                                                ],
                                                
                    // Theme Options               
                    progress_bar            :   1,          // Timer for each slide                         
                    mouse_scrub             :   0
                    
                });
            });
            
        </script>

        <style type="text/css">
            /*ul#demo-block{ margin:0 15px 15px 15px; }*/
                /*ul#demo-block li{ margin:0 0 10px 0; padding:10px; display:inline; float:left; clear:both; color:#aaa; background:url('img/blurred_home.png'); font:11px Helvetica, Arial, sans-serif; }*/
        </style>

        <!-- Fin galeria -->    

    <style>
    body {
        overflow: hidden!important;
    }
    #panel-block {
        width: 100%;
        height: 100%;
        position:absolute;
        top:0;
        z-index: 100;
        display: block;        
    }

    #panel {
        width: 100%;
        height: 100%;
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

    /*  .top-img {
        min-height: 100%;
        min-width: 1024px;
        width: 100%;
        height: auto;
        position: relative;
        top: 0px;
        left: 0;
    }*/

    @media screen and (max-width: 1024px) {
      .bg-image {
        left: 50%;
        margin-left: -512px;
      }
/*      #panel {
        left: 50%;
        margin-left: -512px;        
      }
      .top-img {
        top: 60px!important;
      }*/
    }

    .btn-gallery {
      position: absolute;
      top: 50%;
      left:45%;
      z-index: -99;
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
            <div class="navbar-header" maedia="min-witdh:768px">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img alt="logo" src="images/svg_chico_opt.svg" class="img-responsive">
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



    <div id="panel-block">
    <!-- <img class="bg-image" src="img/blurred_home.jpg" alt=""> -->
    <a id="flip" href="#" class="flip btn btn-primary btn-gallery" role="button">Ver galeria</a>        
    </div>

    <!-- Cuerpo de la galeria -->
    <div id="panel">
        <!-- <ul id="demo-block">
        <li></li>
        </ul>   -->
        <!--End of styles-->
        
        <!--Thumbnail Navigation-->
        <div class="close-awesome"><i class="flip fa fa-times fa-2x load-item"></i></div>

        <div id="prevthumb"></div>
        <div id="nextthumb"></div>
        
        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
        
        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>
        
        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>
        
        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">
                
                <a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
            
                <!--Slide counter-->
                <div id="slidecounter">
                    <span class="slidenumber"></span> / <span class="totalslides"></span>
                </div>
                
                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>
                
                <!--Thumb Tray button-->
                <a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>
                
                <!--Navigation-->
                <ul id="slide-list"></ul>
                
            </div>
        </div>
    </div>

<!-- Default Scripts -->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <!--<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>-->

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

                $(".flip").click(function(){
                    $("#panel, #panel-block").slideToggle({
                        direction: "up"
                    }, 300);
                    $(".slide-link-0").click();
                });
            });
        </script>

    </body>
</html>
