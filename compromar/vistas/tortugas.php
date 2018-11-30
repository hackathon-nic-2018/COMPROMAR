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
  <meta name="author" content="">
  <title> Bienvenidos a Ing Sistemas Website</title>
  <?php include_once '../include/css.php';?>
</head><!--/head-->

<body>
  <?php include_once '../include/header.php';?>

  <div style="padding-top: 100px; " class="container-fluid">
    
    <h2>Herramientas Basicas</h2>
  
  </div>


   <?php include_once '../include/js.php';?>
</body>

</html>