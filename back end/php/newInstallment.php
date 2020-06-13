<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("paymentsClass.php");

  	$newInstallment = new payment();
  	$newInstallment->SetC_ID(htmlentities($_POST['customer_name']));
    $newInstallment->SetSellOrBuy(htmlentities($_POST['sellOrBuy']));
  	$newInstallment->SetPaymentAmount(htmlentities($_POST['payment_price']));
  	$newInstallment->SetNote(htmlentities($_POST['note']));
  	$newInstallment->SetPaymentDate(htmlentities($_POST['installment_date']));

  	$newInstallment->NewInstallment();

    header('location: ../../Front End/payment&receipt.php');
?>