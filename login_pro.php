<?php
session_start();
   if(!isset($_SESSION['checking']))
      header('location: index.php');

		include("back end/php/connect&create.php");
		
		$userID = 0;
		$ID= 0;
		$EnteredPassword= 0;
		$realPassword = 0;

		$user = $connection->prepare("select U_ID from users where user_name = ? && password = ?");
		
		$user->bind_param("ss", $userName, $EnteredPassword);
		
		$userName = htmlentities($_POST['name']);
		$EnteredPassword = htmlentities($_POST['password']);
		
		$user->execute();
		$user->store_result();

		if($user->num_rows == 1)
		{
			$user->bind_result($ID);
			while($user->fetch())
			{
				$userID = $ID;
			}
				// by assigneing user id to session we can check each page befor opening and make sure use pass the login page and if he didn't the session will be empty and we can direct him to login page
				$_SESSION['userId'] = $userID; 
				$user->free_result();
				header('location:  Front End/customer.php');
				return true;	
		}
		else
		{
			echo "<script type='text/javascript'>
			location = 'login.php'
			alert('Incorrect user name!');
			</script>";
			return false;	
		}

?>