<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require_once "costsClass.php";

	$updateCost = new Costs();

	$updateCost->SetCostID(htmlentities($_POST['SC_ID']));
	$updateCost->SetB_ID(htmlentities($_POST['B_ID']));
	$updateCost->SetGoodsName(htmlentities($_POST['goods']));
	$updateCost->SetCustomerName(htmlentities($_POST['customer']));
	$updateCost->SetCostType(htmlentities($_POST['costType']));
	$updateCost->SetAfgPrice(htmlentities($_POST['afgPrice']));
	$updateCost->SetExchangeRate(htmlentities($_POST['exchangeRate']));
	$updateCost->SetUsdPrice(htmlentities($_POST['usdPrice']));
	$updateCost->SetDate(htmlentities($_POST['specificDate']));
	$updateCost->SetTradeDate(htmlentities($_POST['Tdate']));
	$updateCost->SetC_ID(htmlentities($_POST['C_ID']));


	$updateCost->UpdateSpecificCost();

	header("location: ../../Front End/cost.php?id=" . $updateCost->GetB_ID() . "&goods=" . $updateCost->GetGoodsName() . "&customer=" . $updateCost->GetCustomerName() . "&Tdate=" . $updateCost->GetTradeDate() . "&C_ID=" . $updateCost->GetC_ID());
?>