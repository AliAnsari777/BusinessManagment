<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("customerClass.php");

  	$checkCustomer4Delete = new Customers();
  	$checkCustomer4Delete->SetCustomerID(htmlentities($_POST['id']));

  	$checkCustomer4Delete->CheckCustomer4Delete();

  ?>