<?php
include('/conexion.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Equipos MC</title>
  <link href="images\faviconmc.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="fonts.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <script src = "js/jquery-2.2.2.min.js"></script>


      </script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  </head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">¡Equipando al<span> Mundo!</span></h1>
            <p class="animated fadeInRightBig">Equipos MC® S.A de C.V.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Registrate</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">100% Calidad<span> Premium</span></h1>
            <p class="animated fadeInRightBig">¡Tu mejor inversion!</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Registrate</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Expansión<span> MC</span></h1>
            <p class="animated fadeInRightBig">Desde 1991</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Registrate</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Equipos MC</a></li>
            <li class="scroll"><a href="#services">Registrate</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
     <div class="text-center col-sm-8 col-sm-offset-2">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label> <br>
                    <input type="email" class="text-center col-sm-8 col-sm-offset-2" id="exampleInputNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label> <br>
                    <input type="email" class="text-center col-sm-8 col-sm-offset-2" id="exampleInputPassword" placeholder="Contraseña">
                </div>

                </div><br>

                  <button type="button" class="btn btn-primary" type = "submit">Iniciar Sesión</button>
            </form>

          </div>
        </div>
      </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      </div>
    </div>
  </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->



  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">


        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">


        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">


        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">

        </div>
      </div>
    </div>
  </section><!--/#features-->


  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="facebook" href="https://www.facebook.com/Equipos-MC-874147312704968/" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="https://www.youtube.com/channel/UCIVsYLmg3X4vBmXkGpxA5og" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/equipos-mc-770731114?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="https://es.pinterest.com/equiposmc/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p> Copyright © 2016 EQUIPOS MC Todos los derechos reservados.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right"><a href="">CEDETEC Imagen Corporativa</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
