<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("sell&buyClass.php");

  	$check_goods = new Trade();
  	$check_goods->SetCustomerID(htmlentities($_POST['g_id']));
  	$check_goods->SetGoodsID(htmlentities($_POST['s_id']));
  	$check_goods->CheckGoodsInStock();

  ?>