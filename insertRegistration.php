<?php
	include('conn.php');
	
	
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	$name=$_POST['first_name'];
	$lastName=$_POST['last_name'];
    $empid=$_POST['employee_id'];
	$des=$_POST['designation'];
    
	mysqli_query($conn,"insert into registration (email, password, first_name, last_name, employee_id, designation) values ('$mail', '$pass', '$name', '$lastName', '$empid', '$des')");
	header('location:man dashboard.php');

?>

