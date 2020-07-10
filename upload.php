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

<title>Upload Project </title>
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
	<li><a href="progress.php">PROJECT PROGRESS</a></li>
    <li><a href="viewprojs.php">VIEW PROJECTS</a></li>
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



<!-- container -->
<div class="container">
    <section id="content">
        <form action="insertProj.php" method="POST">
            <h1>Upload Project</h1>

<!-- form -->			
<div>
    <input type="text" placeholder="Project name" name="pname" required="" id="username" />
	&nbsp &nbsp &nbsp
	 <input type="text" placeholder="Start date" name="start_date" required="" id="username" />
</div>

	<br>
	
<div>
	<input type="text" placeholder="Employee_ID" name="employee_id" required="" id="empcode" />
   
	&nbsp &nbsp &nbsp
    <input type="text" placeholder="Employee_name" name="employee_name" required="" id="username" />
</div>	

	<br>

<div>
 <textarea rows="2" cols="90" style="border-radius: 3px; border: 1px solid; font: 15px Helvetica, Arial, sans-serif;" name="description" placeholder="Description" required></textarea>
	
</div>

<div>
    <input type="submit" value="Register" name="submit" />
</div>

<div>
    <input type="reset" value="Reset" name="reset" />
</div>


</form>
	
</section><!-- content -->

</div>
</body>