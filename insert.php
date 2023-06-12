<?php

include('conn.php');

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


mysqli_query($connection, "INSERT INTO `enquiry_list` (User_Name,
	User_Last_Name,
	User_Phone_pno,
	User_Gender,
	User_Email_id,
	User_Course,
	User_section,
	User_Timings,
	User_Training_program,
	User_Fee,
	User_Faculty,
	User_Address,
	City,State,
	User_Laptop_status,
	Batch_Strength,
	User_Joining_Date,
	User_Realving_Date) values ('$firstname','$lastname','$Phoneno','$gender','$emailid','$course','$section','$timings','$trainingprogram','$fee','$choosenfaculty','$address','$city','$state','$laptopstatus','$batchstrength','$joiningdate','$endingdate') ");

header('location:index.php')
?>