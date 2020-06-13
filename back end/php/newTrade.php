<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require "sell&buyClass.php";

	$newTrade = new Trade();

	$newTrade->SetCustomerID(htmlentities($_POST['autoCustomer']));
	$newTrade->SetGoodsID(htmlentities($_POST['goodsID']));
	$newTrade->SetStockID(htmlentities($_POST['stockID']));
	$newTrade->SetPriceInTon(htmlentities($_POST['priceInTon']));
	$newTrade->SetNumberOfCars(htmlentities($_POST['noOfCars']));
	$newTrade->SetSack(htmlentities($_POST['sack']));
	$newTrade->SetWeithInKilo(htmlentities($_POST['weithInKilo']));
	$newTrade->SetWastage(htmlentities($_POST['wastage']));
	$newTrade->SetTotalPrice(htmlentities($_POST['totalPrice']));
	$newTrade->SetPaymentAmount(htmlentities($_POST['paymentAmount']));
	$newTrade->SetReminderAmount(htmlentities($_POST['reminderAmount']));
	$newTrade->SetSellOrBuy(htmlentities($_POST['buyOrSell']));
	$newTrade->SetTradeDate(htmlentities($_POST['tradeDate']));
	$newTrade->SetBuyID(htmlentities($_POST['buyID']));
	$newTrade->SetProfit(htmlentities($_POST['profit']));

	$newTrade->NewTrade();
	header('location: ../../Front End/sell&buy.php');
	
?>