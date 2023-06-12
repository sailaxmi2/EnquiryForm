<?php 

	include("conn.php");
	$id = $_GET['id'];

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$Phoneno = $_POST['phoneno'];
	$gender = $_POST['Gender'];
	$emailid = $_POST['emailid'];
	$course = $_POST['Course'];
	$section = $_POST['section'];
	$timings = $_POST['Timings'];
	$trainingprogram = $_POST['TrainingProgram'];
	$fee = $_POST['fee'];
	$choosenfaculty = $_POST['Choosenfaculty'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$laptopstatus = $_POST['laptopstatus'];
	$batchstrength = $_POST['batchstrength'];
	$joiningdate = $_POST['Joiningdate'];
	$endingdate = $_POST['endingdate'];

	mysqli_query($connection, "UPDATE `enquiry_list` set User_Name='$firstname',
		User_Last_Name='$lastname',
		User_Phone_pno='$Phoneno',
		User_Gender='$gender',
		User_Email_id='$emailid',
		User_Course='$course',
		User_section='$section',
		User_Timings='$timings',
		User_Training_program='$trainingprogram',
		User_Fee='$fee',
		User_Faculty='$choosenfaculty',
		User_Address='$address',
		City='$city',
		State='$state',
		User_Laptop_status='$laptopstatus',
		Batch_Strength='$batchstrength',
		User_Joining_Date='$joiningdate',
		User_Realving_Date='$endingdate' WHERE User_ID ='$id' ");

	header('location:index.php');
?>