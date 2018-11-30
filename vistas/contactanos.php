<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:../index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Compromar">
  <title> COMPROMAR</title>
  <?php include_once '../include/css.php';?>
</head><!--/head-->

<body>
  <?php include_once '../include/header.php';?>

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="14.051395" data-longitude="-83.412371" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contactanos</h2>
            <p>Estos son los diferentes medios donde pueden contactarnos</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Correo electronico" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Asunto" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Escriba su mensaje" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Enviar</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p></p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Direccion:</span> Puerto Cabezas  </li>
                  <li><i class="fa fa-phone"></i> <span> Telefono:</span> 22115852  </li>
                  <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="mailto:someone@yoursite.com"> .com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.compromar.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->

   <?php include_once '../include/footer.php';?>
   
   <?php include_once '../include/js.php';?>
</body>

</html>