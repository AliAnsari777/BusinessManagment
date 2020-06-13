<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$stockId = htmlentities($_GET['id']);
	}

	require_once "stockClass.php";

	$delete = new Stocks();
	$delete->SetStockID($stockId);
	$delete->DeleteStock();

	header('location: ../../Front End/settings.php#stock');
?>