<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  	require_once ("customerClass.php");

  	$approveResult = new Customers();
  	$approveResult->SetApproveDate(htmlentities($_POST['val']));
  	$approveResult->SetCustomerID(htmlentities($_POST['id']));
  	$approveResult->ApproveResult();
  ?>