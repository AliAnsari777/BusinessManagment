<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require "costsClass.php";

	$newCost = new Costs();

	$newCost->SetB_ID(htmlentities($_POST['B_ID']));
	$newCost->SetC_ID(htmlentities($_POST['C_ID']));
	$newCost->SetGoodsName(htmlentities($_POST['goods']));
	$newCost->SetTradeDate(htmlentities($_POST['Tdate']));
	$newCost->SetCustomerName(htmlentities($_POST['customer']));
	$newCost->SetCostType(htmlentities($_POST['costType']));
	$newCost->SetAfgPrice(htmlentities($_POST['afgPrice']));
	$newCost->SetExchangeRate(htmlentities($_POST['exchangeRate']));
	$newCost->SetUsdPrice(htmlentities($_POST['usdPrice']));
	$newCost->SetDate(htmlentities($_POST['specificDate']));
	$newCost->SetTotalCost(htmlentities($_POST['totalCost']));

	$newCost->NewSpecificCost();

	header("location: ../../Front End/cost.php?id=" . $newCost->GetB_ID() . "&goods=" . $newCost->GetGoodsName() . "&customer=" . $newCost->GetCustomerName()."&Tdate=" . $newCost->GetTradeDate() . "&C_ID=" . $newCost->GetC_ID());
?>