<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("customerClass.php");

  	$checkCustomer = new Customers();
  	$checkCustomer->SetName(htmlentities($_POST['name']));

  	$checkCustomer->CheckCustomer();
?>