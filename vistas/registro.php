<?php
  session_ not start();
  if (@!$_SESSION['user']) {
    header("Location:../index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin.php");
  }
  ?>