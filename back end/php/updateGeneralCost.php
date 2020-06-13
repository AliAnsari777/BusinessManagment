<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require_once "costsClass.php";

	$updateCost = new Costs();

	$updateCost->SetCostID(htmlentities($_POST['id']));
	$updateCost->SetNote(htmlentities($_POST['note']));
	$updateCost->SetAfgPrice(htmlentities($_POST['afg']));
	$updateCost->SetExchangeRate(htmlentities($_POST['exchange_rate']));
	$updateCost->SetUsdPrice(htmlentities($_POST['usd']));
	$updateCost->SetDate(htmlentities($_POST['date']));

	$updateCost->UpdateGeneralCost();
	header('location: ../../Front End/cost.php#page2');
?>