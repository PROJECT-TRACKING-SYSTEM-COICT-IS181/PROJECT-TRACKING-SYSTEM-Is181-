<?php
	include('conn.php');
	
	
	$name=$_POST['first_name'];
	$lastName=$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
    $empcode=$_POST['employee_id'];
	$des=$_POST['designation'];
    
	mysqli_query($conn,"insert into registration (first_name, last_name, email, password,  employee_id, designation) values ('$name', '$lastName', '$email', '$password',  '$empcode', '$des')");
	header('location:upload.php');
	
	

?>

