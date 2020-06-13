<?php
	
	//There should be password for root user. Blank password will not work.
	$mysqlPath="C:\\wamp\\bin\\mysql\\mysql5.6.17\\bin\\";
	$command = $mysqlPath . "mysqldump.exe flour_trade > C:\\Windows\\flour_trade_" . date("Y-m-d") . ".sql --user=epiz_20343307 --password=aCPmlh8G";
	system($command);
	
	session_start();
	unset($_SESSION);
	session_destroy();
	header('Location: ../../login.php');
	exit;
?>