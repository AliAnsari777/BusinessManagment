<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$I_ID = htmlentities($_GET['id']);
	}

	require_once "paymentsClass.php";

	$delete = new Payment();
	$delete->SetI_ID($I_ID);

	$delete->DeleteInstallment();

	header('location: ../../Front End/payment&receipt.php');
?>