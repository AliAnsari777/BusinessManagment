<?php
	session_start();
	if(!isset($_SESSION['userId']))
		header('location: ../../login.php');
		
	require_once("sell&buyClass.php");

	$autoList = new Trade();
	$autoList->SetCustomerName(htmlentities($_POST['searchValue']));
	$autoList->SetIdentifier(htmlentities($_POST['identifier']));
	$autoList->AutoList();
?>