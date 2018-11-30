<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:../index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }

  include_once '../connect_db.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> COMPROMARC</title>
  <?php include_once '../include/css.php';?>
</head><!--/head-->

<body>
  <?php include_once '../include/header.php';?>

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Productos</h2>
          <p></p>
        </div>
      </div> 
    </div>

    <div class="container-fluid">

      <div class="row">
        <?php
          $consulta = mysqli_query($mysqli,"SELECT * FROM galeria ORDER BY id_galeria DESC");
          while ($ft = mysqli_fetch_array($consulta)) {
          
        ?>

        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="../images/portfolio/<?php echo $ft['nombre_img']?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3></h3>
                    <p>Pardo Rojo</p>
                    <p> Precio: C$30 lbr</p>
                    <p> Envio Nivel Nacional</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="../images/portfolio/<?php echo $ft['nombre_img']?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
        }
      ?>

      </div>

    </div>

    <div id="portfolio-single-wrap">
      <div id="portfolio-single">

      </div>
    </div><!-- /#portfolio-single-wrap -->

  </section><!--/#portfolio-->
  

  <div class="container">
    <div class="row">
       <!--Formulario de subida de fotos-->
       <form action="../procesar.php" method="post" enctype="multipart/form-data">
          <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <input required="required" class="form-control" type="file" name="foto"/>
          </div>
          
          <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <input class="btn btn-success" type="submit" value="Subir Foto"/>
          </div>

       </form>
   </div>
    
  </div>
    
   <?php include_once '../include/footer.php';?>
   
   <?php include_once '../include/js.php';?>
</body>

</html>