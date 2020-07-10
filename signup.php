<!DOCTYPE html>
<html>
<head>

<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Form is successfully submitted");
  });
});
</script>

<title> Registration Form </title>
<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
 
<!-- header --> 
<div class="header">
<div class="header-left">
	<h1>PROJECT TRACKING SYSTEM</h1>
</div>
</div>

<body>
<!-- container -->
<div class="container">
    <section id="content">
        <form action="insertRegistration.php" method="POST">
            <h1>Registration Form</h1>

<!-- form -->			
<div>
    <input type="text" placeholder="First name" name="first_name" required="" id="username" />
	&nbsp &nbsp &nbsp
	<input type="text" placeholder="Last name" name="last_name" required="" id="username" />
</div>

	<br>
	
<div>
   <input type="email" placeholder="Email" name="email" required="" id="email" />
	&nbsp &nbsp &nbsp
    <input type="password" placeholder="Password" name="password" required="" id="password" />
</div>	

	<br>

<div>
    <input type="text" placeholder="Employee_ID" name="employee_id" required="" id="empcode" />
	&nbsp &nbsp &nbsp
    <input type="text" placeholder="Designation" name="designation" required="" id="title" />
</div>

<div>
    <input type="submit" value="Register" name="submit" />
</div>

<div>
    <input type="reset" value="Reset" name="reset" />
</div>


</form>
	<p style="position: relative; left: 5px;"> Already a member? <a href="login.php">Sign in</a> </p>     
</section><!-- content -->

</div>
</body>