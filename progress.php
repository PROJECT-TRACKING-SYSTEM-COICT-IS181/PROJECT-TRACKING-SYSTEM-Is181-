<!DOCTYPE html>
<html>
<head>
<title>Progress Form</title>
<link rel="stylesheet" type="text/css" href="css/progress.css">
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
	<li><a href="upload.php">ADD PROJECT</a></li>
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


<div class="container">
    <section id="content">
	<!-- form -->
<form action="insertProj.php" method="POST">
<h1>Progress Form</h1>

<div>
    <input type="text" placeholder="Project ID" name="projid" required="" id="username" />
</div>

<div>
	<select name="status" id="username" style="width: 95%;"> 
	<option value="" disabled selected hidden>Status</option>
	<option value="Documentation">Documentation</option>
	<option value="System Analysis and Design">System Analysis and Design</option>
	<option value="System Implementation and Prototype testing">System Implementation and Prototype testing</option>
	<option value="Report Writing">Report Writing</option>
	</select>

</div>

<div>
    <input type="submit" value="Submit" name="submit" />
	
</div>

</form>
       
</section><!-- content -->
</div><!-- container -->
</body>
</html>