<?php 
	session_start();
	if(!isset($_SESSION['userId']))
		header('location: ../../login.php');

	require_once ("sell&buyClass.php");

	$dates = new Trade();
	$dates->SetCode(htmlentities($_POST['code']));
	$dates->DisplayProfit();
?>