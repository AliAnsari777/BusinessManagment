<?php

	// create connection to database
	$connection = new mysqli("sql209.epizy.com", "epiz_20343307", "aCPmlh8G","epiz_20343307_flour_trade");

	// seting the character set of database connectivity.
	$connection->set_charset("utf8");

	// check for connection errors
	if($connection->connect_error)
	{
		die("Connection failed: ". $connection->connect_error);
	}
	
?>