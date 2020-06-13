<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$costId = htmlentities($_GET['id']);
	}

	require_once "costsClass.php";

	$deleteCost = new Costs();
	$deleteCost->SetCostID($costId);
	$deleteCost->DeleteGeneralCost();

	header('location: ../../Front End/cost.php#page2');
?>