<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                /*padding-top: 50px;*/
                padding-bottom: 20px;
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

@media screen and (max-width: 1024px) {
  .bg-image {
    left: 50%;
    margin-left: -512px;
  }
}


.home-button {
  position: absolute;
  top: 500px;
  left: 500px;
}

.central-container {
  /*padding-top: 50px;*/
}

.btn-gallery {
  position: absolute;
  top: 50%;
  left:45%;
}


.home-gallery {
  display: none;
}

.gallery-img {
  min-height: 100%;
  min-width: 1024px;
  
  width: 100%;
  height: auto;
  
  position: fixed;
  top: 0;
  left: 0;
}

@media screen and (max-width: 1024px) {
  .gallery-img {
    left: 50%;
    margin-left: -512px;
  }
}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>





    <!-- button types -->
    <!-- <button type="button" class="btn btn-info">Button</button> -->
    <!-- <input type="button" class="btn btn-info" value="Input Button"> -->  



    <img class="bg-image" src="img/blurred_home.jpg" alt="">
    <a href="#" class="btn btn-primary btn-gallery" role="button">Ver glaeria</a>

<!--     <div class="home-gallery">
      <img class="gallery-img" src="img/22.jpg" alt="">
    </div> -->

<!-- <div style="padding-top:200px;"> -->

<!-- <p>This is a paragraph.</p> -->

<!-- <button class="btn1">Slide up</button> -->
<!-- <button class="btn2">Slide down</button> -->
<!-- </div> -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


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
    </body>
</html>
