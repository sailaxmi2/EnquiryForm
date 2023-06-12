<?php 
	include('conn.php');

	$id =$_GET['id'];
	mysqli_query($connection, "DELETE FROM `enquiry_list` where User_ID = '$id' ");

	header('location:index.php');

?>