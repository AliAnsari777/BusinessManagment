<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("paymentsClass.php");

  	$checkCost = new Payment();
  	$checkCost->CheckBank();

  ?>