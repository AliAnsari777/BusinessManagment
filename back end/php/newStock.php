<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once "stockClass.php";

  $newStock = new Stocks();
  $newStock->SetStockName(htmlentities($_POST['stock_name']));
  $newStock->SetStaffName(htmlentities($_POST['staff_name']));
  $newStock->SetFirstTel(htmlentities($_POST['firstTel']));
  $newStock->SetSecondTel(htmlentities($_POST['secondTel']));
  $newStock->SetStartDate(htmlentities($_POST['start_date']));

  $newStock->NewStock();
  header('location: ../../Front End/settings.php#stock')
?>