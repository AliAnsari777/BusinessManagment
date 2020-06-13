<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../../login.php');

  require_once ("stockClass.php");
  $displayStock = new Stocks();
  $displayStock->DisplayStockSupply();
  
?>