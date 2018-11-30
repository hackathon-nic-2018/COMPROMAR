<!DOCTYPE html>
<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:login.php");
  }elseif ($_SESSION['rol']==1) {
    //header("Location:admin.php");
  }

  include_once '../connect_db.php';
  ?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> COMPR0MAR</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet"> 
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/lightbox.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link id="css-preset" href="../css/presets/preset1.css" rel="stylesheet">
  <link href="../css/responsive.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../images/icono.ico">
</head><!--/head-->

<body>

<ul style="position: fixed; top: 115px; right: 5px;" class="nav">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="javascript:cerrarSesion();"> Cerrar Cesión </a></li>       
    </ul>
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="inicio">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(../img/pescado/pescado1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenidos <span> a COMPROMARC</span></h1>
            <p class="animated fadeInRightBig">Somos la plataforma numero uno en Nicaragua para comercializacion de Productos maritimos </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#features">Empecemos</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../img/pescado/pescado3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">YAMNI BALRAM <span>COMPROMARC RAH</span></h1>
            <p class="animated fadeInRightBig">Yang nani numba kumi bri ya akawisma yara atkaya dia kabu wina</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#features">Empecemos</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../img/pescado/pescado4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">WELCOME <span>TO COMPROMAR</span></h1>
            <p class="animated fadeInRightBig">We are the number one platform in Nicaragua for maritime product marketing</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#features">Empecemos</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#features"><i class="fa fa-angle-down"></i></a>

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
          <a style="padding: 0;" class="navbar-brand" href="inicio.php">
            <img style="height: 80px;margin-top: 2.5" class="img-responsive" src="../images/logoblanco.png" alt="logoblancos">
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll"><a href="inicio.php">Inicio</a></li>
            <li class="scroll"><a href="servicios.php">Productos</a></li>
            <li class="scroll"><a href="contactanos.php">Contactanos</a></li>                     
            <li class="scroll"><a href="./login.php">Registrarte</a></li>
            <li class="scroll"><a href="./login.php">Login</a></li>     
          </ul>
          </ul>
        </div>
      </div>
    </div>
  </header>
  </ul>

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">
          <?php
            $query = mysqli_query($mysqli, "SELECT * FROM login");
            echo mysqli_num_rows($query);
            
          ?>

          </h3>
          <p>Empredores</p>
        </div>
       
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Atencion</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  <p><a>Productos recientes</a></p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
         <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="../images/Fondo.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo8.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo9.jpg" alt=""></a>
                  </div>
                </div>                               
                
               </div>                            
              
              
            </div>
            <div class="entry-header">
              <h3><a href="#">Langostas.</a></h3>
              
            </div>
          </div> 

          <div class="col-sm-4 wow fadeInUp" data-wow-duration="100ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="../images/Fondo5.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo3.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo9.jpg" alt=""></a>
                  </div>
                 
                </div>                               
                
               </div>                            
              
              
            </div>
            <div class="entry-header">
              <h3><a href="#">Pescados.</a></h3>

               </div>
          </div> 

          <div class="col-sm-4 wow fadeInUp" data-wow-duration="100ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="../images/Fondo8.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo12.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="../images/Fondo11.jpg" alt=""></a>
                  </div>
                 
                </div>                               
                
               </div>                            
              
              
            </div>
            <div class="entry-header">
              <h3><a href="#">Pepinos de mar.</a></h3>

               </div>
          </div> 
            
  </section><!--/#blog-->


  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="../images/logoblanco.png" alt="logoblanco"></a>
        </div>
        <div class="social-icons">
          <ul>
            
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="facebook" href="https://www.facebook.com/Compromarc-1775654315897285/"><i class="fa fa-facebook"></i></a></li>
            
          </ul>
        </div>
      </div>
    </div>

    <ul style="position: fixed; top: 115px; right: 5px;" class="nav">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
        <li><a href="javascript:cerrarSesion();"> Cerrar Cesión </a></li>       
    </ul> 
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy;COMPROMARC.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">COMPROMAR<a href="http/"> COMPROMAR</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script type="text/javascript" src="../js/mousescroll.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script>
  <script type="text/javascript" src="../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../js/lightbox.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <script>
    function cerrarSesion(){
      var pregunta = confirm('Esta seguro de cerrar la sesion?');
      if (pregunta) {

        $(location).attr('href','../desconectar.php');
      }
    }

  </script>
</body>
</html>