<!DOCTYPE html>
<html>
<head>

<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Form is successfully submitted");
  });
});

  function validate() {
      
         if( document.myForm.last_name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.last_name.focus() ;
            return false;
         }
		 
		 else if( document.myForm.first_name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.first_name.focus() ;
            return false;
         }
		 

         else if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         else if( document.myForm.employee_id.value == "" || isNaN( document.myForm.ID.value ) ||
            document.myForm.employee_id.value.length != 5 ) {
            
            alert( "Please provide an Id in the correct format ." );
            document.myForm.employee_id.focus() ;
            return false;
         }
          else if( document.myForm.password.value == "" ) {
            alert( "Please provide your valid Password!" );
            document.myForm.password.focus() ;
            return false;
			}
			
		if( document.myForm.designation.value == "" ) {
            alert( "Please provide your designation!" );
            document.myForm.designation.focus() ;
            return false;
			}
         return( true );
      }
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
        <form action="insertRegistration.php" method="POST" name = "myForm" onsubmit = "return(validate());">
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