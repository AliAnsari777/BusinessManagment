<?php
	session_start();
	if(!isset($_SESSION['userId']))
		header('location: ../../login.php');
		
	require_once("sell&buyClass.php");

	$autoList = new Trade();
	$autoList->SetGoodsID(htmlentities($_POST['id']));
	$autoList->GoodsList4edit();
?>