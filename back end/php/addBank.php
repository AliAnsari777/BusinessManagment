<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once ("paymentsClass.php");
  $addBank = new Payment();

  $addBank->SetPayOrRecieve(htmlentities($_POST['pay_or_recieve']));
  $type = $addBank->GetPayOrRecieve();
  if($type == "برداشت")
  {
  	$addBank->SetOutGo(htmlentities($_POST['payment_price']));
  	$addBank->SetIncome(0);
  }
  elseif ($type == "پرداخت") {
  	$addBank->SetIncome(htmlentities($_POST['payment_price']));
  	$addBank->SetOutGo(0);
  }
  $addBank->SetNote(htmlentities($_POST['note']));
  $addBank->SetPaymentDate(htmlentities($_POST['bank_date']));
  $addBank->AddToBank();

  header('location: ../../Front End/payment&receipt.php#page3');
  ?>