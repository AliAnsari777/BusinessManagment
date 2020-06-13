<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once "goodsClass.php";

  $newGoods = new Goods();
  $newGoods->SetName(htmlentities($_POST['goods_name']));
  $newGoods->NewGoods();
  header('location: ../../Front End/settings.php#goods')
?>