<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require "customerClass.php";

	$newCustomer = new Customers();

	$newCustomer->SetName(htmlentities($_POST['customer_name']));
	$newCustomer->SetLastName(htmlentities($_POST['last_name']));
	$newCustomer->SetFirstTel(htmlentities($_POST['first_tel']));
	$newCustomer->SetSecondTel(htmlentities($_POST['second_tel']));
	$newCustomer->SetAddr(htmlentities($_POST['address']));

	$newCustomer->NewCustomer();

	header('location: ../../Front End/settings.php#customer')
?>