<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require "costsClass.php";

	$newCost = new Costs();

	$newCost->SetNote(htmlentities($_POST['note']));
	$newCost->SetAfgPrice(htmlentities($_POST['afg']));
	$newCost->SetExchangeRate(htmlentities($_POST['exchangeRate']));
	$newCost->SetUsdPrice(htmlentities($_POST['usd']));
	$newCost->SetDate(htmlentities($_POST['date']));

	$newCost->NewGeneralCost();

	header('location: ../../Front End/cost.php#page2');
?>