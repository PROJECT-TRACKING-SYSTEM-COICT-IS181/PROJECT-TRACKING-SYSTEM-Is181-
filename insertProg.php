<?php
	include('conn.php');
	
	
	$projname=$_POST['project_name'];
	$progress=$_POST['progress'];
	
	mysqli_query($conn,"insert into progress (project_name, progress) values ('$projname', '$progress')");
	header('location: viewproj.php');
	
	

?>

