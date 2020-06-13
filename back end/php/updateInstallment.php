<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require_once "paymentsClass.php";

	$update = new Payment();

	$update->SetPaymentAmount(htmlentities($_POST['payment_amount']));
	$update->SetNote(htmlentities($_POST['note']));
	$update->SetPaymentDate(htmlentities($_POST['payment_date']));
	$update->SetI_ID(htmlentities($_POST['I_ID']));

	$update->UpdateInstallment();
	
	header('location: ../../Front End/payment&receipt.php');
?>