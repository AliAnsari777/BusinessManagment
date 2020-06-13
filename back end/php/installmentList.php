<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	// this file is call from paymentInstallments.js or recieveInstallment.js to run the BargainsList4Payment or BargainsList4Recieve function 
    // from paymentsClass according to the code which define which function should call and display list of bargains of selected customer.
	require_once ("paymentsClass.php");

	$installment = new Payment();
	$installment->SetCustomerID(htmlentities($_POST['value']));
	$installment->SetSellOrBuy(htmlentities($_POST['sellOrBuy']));
	$installment->InstallmentList();
	
?>