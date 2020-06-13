<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once ("stockClass.php");

  $update = new Stocks();

  $update->SetStockID(htmlentities($_POST['id']));
  $update->SetStockName(htmlentities($_POST['stock_name']));
  $update->SetStaffName(htmlentities($_POST['staff_name']));
  $update->SetFirstTel(htmlentities($_POST['first_tel']));
  $update->SetSecondTel(htmlentities($_POST['second_tel']));
  $update->SetStartDate(htmlentities($_POST['start_date']));

  $update->UpdateStock();

header('location: ../../Front End/settings.php#stock');
 ?>