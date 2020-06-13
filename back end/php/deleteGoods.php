<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$goodsId = htmlentities($_GET['id']);
	}

	require_once "goodsClass.php";

	$delete = new Goods();
	$delete->SetGoodsID($goodsId);
	$delete->DeleteGoods();

	header('location: ../../Front End/settings.php#goods');
?>