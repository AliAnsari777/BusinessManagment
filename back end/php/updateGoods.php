<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once "goodsClass.php";
  $update = new Goods();

  $update->SetName(htmlentities($_POST['name']));
  $update->SetGoodsID(htmlentities($_POST['id']));
  $update->UpdateGoods();

  header('location: ../../Front End/settings.php#goods');
 ?>