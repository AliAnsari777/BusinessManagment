<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require_once "sell&buyClass.php";

	$update = new Trade();

	$update->SetCustomerID(htmlentities($_POST['autoCustomer']));
	$update->SetGoodsID(htmlentities($_POST['goodsID']));
	$update->SetStockID(htmlentities($_POST['stockID']));
	$update->SetTradeDate(htmlentities($_POST['tradeDate']));
	$update->SetNumberOfCars(htmlentities($_POST['noOfCars']));
	$update->SetSack(htmlentities($_POST['sack']));
	$update->SetWeithInKilo(htmlentities($_POST['weithInKilo']));
	$update->SetWastage(htmlentities($_POST['wastage']));
	$update->SetPriceInTon(htmlentities($_POST['priceInTon']));
	$update->SetTotalPrice(htmlentities($_POST['totalPrice']));
	$update->SetBargainsID(htmlentities($_POST['tradeID']));
	$update->SetProfit(htmlentities($_POST['profit']));
	$update->SetBuyID(htmlentities($_POST['buy_id']));
	$update->SetSellOrBuy(htmlentities($_POST['buyOrSell']));
	$update->UpdateTrade();

	header('location: ../../Front End/sell&buy.php');
?>