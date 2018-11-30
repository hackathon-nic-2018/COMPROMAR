<?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:../../index.php");
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
  <meta name="author" content="">
  <title> COMPROMAR</title>
  <?php include_once '../include/css.php';?>
</head><!--/head-->

<body>
  <?php include_once '../include/header.php';?>
  <div style="padding-top: 100px;" class="container-fluid">
    <div style="width: 100%; max-width: 600px; text-align: center;margin:0 auto;">
     <img class="img-responsive" src="../images/pensum.jpg">
    </div> 
  
  </div>
  <br>
  <br>

   <?php include_once '../include/footer.php';?>

   <?php include_once '../include/js.php';?>
</body>

</html>