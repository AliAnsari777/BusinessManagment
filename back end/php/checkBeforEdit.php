<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("sell&buyClass.php");

  	$check4edit = new Trade();
  	$check4edit->SetEditID(htmlentities($_POST['b_id']));
  	$check4edit->SetCustomerID(htmlentities($_POST['c_id']));
  	$check4edit->SetSellOrBuy(htmlentities($_POST['trade']));
  	$check4edit->SetCustomerName(htmlentities($_POST['installment']));

  	$check4edit->CheckBeforEdit();

  ?>