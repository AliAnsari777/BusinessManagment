<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$Bank_ID = htmlentities($_GET['id']);
	}

	require_once "paymentsClass.php";

	$delete = new Payment();
	$delete->SetBank_ID($Bank_ID);

	$delete->DeleteBankEntry();

	header('location: ../../Front End/payment&receipt.php#page3');
?>