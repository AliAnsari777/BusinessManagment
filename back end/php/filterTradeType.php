<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("paymentsClass.php");

  	$filter = new Payment();
  	$filter->SetTradeType(htmlentities($_POST['value']));
  	$filter->SetCustomerID(htmlentities($_POST['id']));
  	if ($_POST['code'] == 1) 
  	{
  		$filter->AllOfBargainsFromOneCustomer();
  	}
  	elseif ($_POST['code'] == 2)
  	{
  		$filter->oneCustomerInstallments();
  	}
  	
  ?>