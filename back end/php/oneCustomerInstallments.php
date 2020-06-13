<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	// this file is call from report.js to run the oneCustomerInstallments function 
    // from paymentsClass and display full list of installments from selected customer.
	require_once ("paymentsClass.php");

	$installment = new Payment();
	$installment->SetCustomerID(htmlentities($_POST['value']));
	
	$installment->oneCustomerInstallments();	
?>