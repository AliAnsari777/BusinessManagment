<?php
	session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	if(isset($_GET['id']))
	{
		$customerId = htmlentities($_GET['id']);
	}

	require_once "customerClass.php";

	$delete = new Customers();
	$delete->SetCustomerID($customerId);
	$delete->DeleteCustomer();

	header('location: ../../Front End/customer.php');
?>
