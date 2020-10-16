<?php
  session_start(); 
  $email=$_SESSION['employee_name'];
  if(!$email)
  {
	  header("Location: login.php");
  }
  
  ?>
  
<!DOCTYPE html>
<html>
<head>



<title>Dashboard </title>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
 
<body>

<!-- header --> 
<div class="header">

<div class="header-left">
	<h1>PROJECT TRACKING SYSTEM</h1>
</div>

</div>

<div class="header2">

<div class="header-right">
	<h2>Logged in as: <?php echo $email; ?>
 </h2>
</div>

</div>
<div class="bg">
<div class="sidenav">
	<a href="projects.php">Register Project</a>
	<a href="viewproj.php">View Projects</a>
	<a href="progress.php">Project Progress</a>
	<a href="viewprog.php">View Progress</a>
	<a href="../logout.php">Logout</a>
</div>

<div class="info">
<p>Hello <?php echo $email; ?><p>
<hr/>

<p>Welcome to Project Tracking System.</p>

<p>Please register your project and project progress with correct credentials.</p>
<p>Remember to update your progress after finishing each stage of your project.</p>


<br>
<b>Don't forget to check your everyday comments too!</b>

<form action="viewcomm.php" method="POST">
 <input type="submit" value="Check comments" name="send" />
</form>

</div>
</div>
</body>