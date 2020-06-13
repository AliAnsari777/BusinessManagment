<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("goodsClass.php");

  	$checkGoods = new Goods();
  	$checkGoods->SetName(htmlentities($_POST['name']));

  	$checkGoods->CheckGoods();
?>