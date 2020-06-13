<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$tradeId = htmlentities($_GET['id']);
		$goodsID = htmlentities($_GET['G_ID']);
		$stockID = htmlentities($_GET['S_ID']);
		$buyID = htmlentities($_GET['buy_ID']);
	}

	require_once "sell&buyClass.php";

	$delete = new Trade();
	$delete->SetBargainsID($tradeId);
	$delete->SetGoodsID($goodsID);
	$delete->SetStockID($stockID);
	$delete->SetBuyID($buyID);
	$delete->DeleteTrade();

	header('location: ../../Front End/sell&buy.php');
?>