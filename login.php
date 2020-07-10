 
<?php
  include('conn.php');
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {

$dbemail = mysqli_real_escape_string($conn,$_POST['email']);
$dbpassword = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT email, password FROM registration WHERE email='$dbemail' AND password='$dbpassword'";
$result = mysqli_query($conn,$sql);



$count = mysqli_num_rows($result);

if($count == 1) {
$_SESSION['email'] = $dbemail;

header("Location: upload.php");  
} else{
    $message = "Username and/or Password incorrect.\\nPlease Try again.";
  echo "<script type='text/javascript'>alert('$message');</script>";


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


<!-- container -->	
<div class="container">
<!-- content -->
    <section id="content">
<!-- form -->
<form action="" method="POST">
	<h1>Login Form</h1>

<div>
    <input type="text" placeholder="Username" name="email" required="" id="username" />
</div>

<div>
	<input type="password" placeholder="Password" name="password" required="" id="password" />
</div>

<div>
    <input type="submit" value="Log in" name="submit" />
	
	<a href="../MANAGER/login.php">Manager</a>
	<a href="signup.php">Register</a>
</div>

</form>
       
</section>
</div>

</body>
</html>