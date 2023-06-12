<?php

	include('conn.php');
	session_start();

	$user_check = $_SESSION['User_Name'];
	
	$session_sql = mysqli_query($connection, "SELECT * FROM login 
		WHERE User_Name = '$user_check' ");

	$row = mysqli_fetch_array($session_sql);
	
	$login_session = $row['User_Name'];

	if(!isset($_SESSION['User_Name']))
	{
		header("location:login.php");
		die();
	}	 

?>