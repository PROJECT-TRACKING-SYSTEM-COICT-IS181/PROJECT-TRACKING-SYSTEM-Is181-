<?php
	include('conn.php');
	
	
	$projid=$_POST['projid'];
	$pstatus=$_POST['status'];
	
	mysqli_query($conn,"insert into progress (projid, status) values ('$projid', '$pstatus')");
	header('location:viewproj.php');
	
	

?>

