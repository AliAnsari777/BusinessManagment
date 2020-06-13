<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	// this file is call from report.js or to run the AllOfBargainsFromOneCustomer function 
    // from paymentsClass and display full list of bargains from selected customer.
	require_once ("paymentsClass.php");

	$bargain = new Payment();
	$bargain->SetCustomerID(htmlentities($_POST['value']));
	
	$bargain->AllOfBargainsFromOneCustomer();	
?>