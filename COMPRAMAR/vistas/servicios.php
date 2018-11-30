<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:vistas/index.php");
  }elseif ($_SESSION['rol']==1) 
  {
    header("Location:admin.php");
  }
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Compromarc">
  <title>COMPROMAR</title>
  <?php include_once '../include/css.php';?>
</head><!--/head-->

<body>
  <?php include_once '../include/header.php';?>       
  </ul>

<div class="container-fluid">

 <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Nuestros Servicios</h2>
            <p>Nuestra mision es ayudar a comercializar con mayor eficacia de los productos maristicos de la costa para que se pueda distribuir en el mercado nacional.</p>
          </div>
        </div> 
      </div>

      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <a href="pescado.php">
            <div class="service-icon">
              <i class="."></i>
            </div>
            <div class="service-info">
              <h3>Pescados</h3>
              <p>Encontras una variedad de pescados</p>
            </div>
            </a>
          </div>

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <a href="langostas.php">
            <div class="service-icon">
              <i class="."></i>.
            </div>
            <div class="service-info">
              <h3>Langostas</h3>
              <p>Encontras una variedad de pescados</p>
            </div>
           </a>
          </div>

          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <a href="almejas.php">
            <div class="service-icon">
              <i class="."></i>
            </div>
            <div class="service-info">
              <h3>Almejas</h3>
              <p>Encontras una variedad y tallas</p>
            </div>
            </a>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <a href="tortugas.php">
            <div class="service-icon">
              <i class="."></i>
            </div>
            <div class="service-info">
              <h3>tortugas</h3>
              <p>Encontras una variedad de tortugas</p>
            </div>
            </a>
          </div>

          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <a href="cangrejos.php">
            <div class="service-icon">
              <i class="."></i>
.            </div>
            <div class="service-info">
              <h3>Cangrejos</h3>
              <p>Encontras una variedad de tallas</p>
            </div>
            </a>
          </div>

          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <a href="variado.php">
            <div class="service-icon">
              <i class="."></i>
            </div>
            <div class="service-info">
              <h3>Mariscos variados</h3>
              <p>Encontras una variedad de productos maristico</p>
            </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
</div>

   <?php include_once '../include/footer.php';?>

   <?php include_once '../include/js.php';?>
</body>

</html>