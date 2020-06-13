<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("stockClass.php");

  	$checkStock = new Stocks();
  	$checkStock->SetStockName(htmlentities($_POST['name']));

  	$checkStock->CheckStock();
?>