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

<title>Comment Project </title>
<link rel="stylesheet" type="text/css" href="css/upload.css">
</head>
 
<body>

<!-- header --> 
<div class="header">
<div class="header-left">
	<h1>PROJECT TRACKING SYSTEM</h1>
</div>
</div>


<!--menu toogle-->
<a href="#menu" id="toggle"><span></span></a>

<div id="menu">
  <ul>
	<li><a href="dashboard.php">DASHBOARD</a></li>
    <li><a href="viewproj.php">VIEW PROJECTS</a></li>
	<li><a href="logout.php">LOGOUT</a></li>
  </ul>
</div>

</div>

<script>
var theToggle = document.getElementById('toggle');




function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}

function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}

function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}
</script>

<?php
	include('conn.php');
	$employee_id=$_GET['id'];
	
$sql = "SELECT project.project_name, project.employee_id, project.employee_name, registration.email FROM project INNER JOIN registration ON project.employee_id = registration.employee_id WHERE project.project_name = '$employee_id'";  




if ($result = mysqli_query($conn, $sql)) {

			
    

    while ($row = mysqli_fetch_assoc($result)) {
		$pn=$row["project_name"];
		$ei=$row["employee_id"];
		$en=$row["employee_name"];
		$em=$row["email"];
		
			}


    

    mysqli_free_result($result);
}



mysqli_close($conn);
?>
		

<!-- container -->
<div class="container">
    <section id="content">
        <form action="insertcomment.php" method="POST">
            <h1>Comment Project</h1>

<!-- form -->			
<div>
    <input type="text" placeholder="Project name" name="project_name" value="<?php echo $pn ?>" required="" id="username" />
	&nbsp &nbsp &nbsp
	 <input type="text" placeholder="Email" name="email" value="<?php echo $em ?>" required="" id="username" />
</div>

	<br>
	
<div>
	<input type="text" placeholder="Employee_ID" name="employee_id" value="<?php echo $ei ?>" required="" id="empcode" />
   
	&nbsp &nbsp &nbsp
    <input type="text" placeholder="Employee_name" name="employee_name" value="<?php echo $en ?>" required="" id="username" />
</div>	

	<br>

<div>
 <textarea rows="2" cols="90" 
 style="border-radius: 3px; border: 1px solid; font: 15px Helvetica, Arial, sans-serif;" 
 name="description" placeholder="Comment" required></textarea>
	
</div>

<div>
    <input type="submit" value="Send Comment" name="send" />
</div>

<div>
    <input type="reset" value="Reset" name="reset" />
</div>


</form>
	
</section><!-- content -->

</div>
</body>