<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

	require_once "customerClass.php";

	$update = new Customers();

	$update->SetCustomerID(htmlentities($_POST['id']));
	$update->SetName(htmlentities($_POST['customer_name']));
	$update->SetLastName(htmlentities($_POST['last_name']));
	$update->SetFirstTel(htmlentities($_POST['first_tel']));
	$update->SetSecondTel(htmlentities($_POST['second_tel']));
	$update->SetAddr(htmlentities($_POST['address']));
	$update->SetjDate(htmlentities($_POST['create_date']));
	$update->SetApproveDate(htmlentities($_POST['approve_date']));
	$update->SetApproveResult(htmlentities($_POST['approve_result']));

	$update->UpdateCustomer();
	header('location: ../../Front End/customer.php');
?>