<?php
	include('conn.php');
	
	
	$name=$_POST['pname'];
	$pdate=$_POST['start_date'];
	$empid=$_POST['employee_id'];
	$empname=$_POST['employee_name'];
    $description=$_POST['description'];

    
	mysqli_query($conn,"insert into project (pname, start_date, employee_id, employee_name, description) values ('$name', '$pdate', '$empid', '$empname', '$description')");
	header('location:progress.php');
	
	

?>

