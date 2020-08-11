<?php
session_start();
include "conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {

$user = mysqli_real_escape_string($conn,$_POST['employee_name']);

$password = mysqli_real_escape_string($conn,$_POST['password']);



    $sql = mysqli_query($conn, "SELECT * FROM registration WHERE employee_name='$user' AND password='$password'");
    if(mysqli_num_rows($sql)==1){
        $qry = mysqli_fetch_array($sql);
        $_SESSION['employee_name'] = $qry['employee_name'];
        $_SESSION['password'] = $qry['password'];
        $_SESSION['designation'] = $qry['designation'];
        if($qry['designation']=="Admin"){
            header("location:MANAGER/dashboard.php");
        }else if($qry['designation']=="user"){
            header("location:EMPLOYEE/dashboard.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username or Password incorrect.\n Please Try again.');
            document.location='index.php';
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>
<head>


<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/log in.css">
</head>
<div class="header">
<div class="header-left">
	<h1>PROJECT TRACKING SYSTEM</h1>
</div>
</div>

<body>

<div class="bg">
<!-- container -->	
<div class="container">
<!-- content -->
    <section id="content">
<!-- form -->
<form action="" method="POST">
	<h1>Login Form</h1>

<div>
    <input type="text" placeholder="Username" name="employee_name" required="" id="username" />
</div>

<div>
	<input type="password" placeholder="Password" name="password" required="" id="password" />
</div>

<div>
    <input type="submit" value="Log in" name="submit" />
	
	
	<a href="signup.php">Register</a>
</div>

</form>
       
</section>
</div>
</div>
</body>
</html>