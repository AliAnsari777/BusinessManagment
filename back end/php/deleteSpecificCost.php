<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$costId = htmlentities($_GET['id']);
		$cName = htmlentities($_GET['customer']);
		$gName = htmlentities($_GET['goods']);
		$B_ID = htmlentities($_GET['bid']);
		$tradeDate = htmlentities($_GET['Tdate']);
      	$C_ID = htmlentities($_GET['C_ID']);
	}

	require_once "costsClass.php";

	$deleteCost = new Costs();
	$deleteCost->SetCostID($costId);
	$deleteCost->SetB_ID($B_ID);
	$deleteCost->DeleteSpecificCost();

	header("location: ../../Front End/cost.php?id=" . $B_ID . "&goods=" . $gName ."&customer=" . $cName ."&Tdate=" . $tradeDate . "&C_ID=" . $C_ID);
?>