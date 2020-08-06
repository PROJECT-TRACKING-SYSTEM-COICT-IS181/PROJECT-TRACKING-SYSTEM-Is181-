<?php
  session_start(); 
  $email=$_SESSION['employee_name'];
  if(!$email)
  {
	  header("Location: login.php");
  }
  
  ?>
<html>
<head>

    <!DOCTYPE html>
<html>
<head>



<title>My Comments</title>
<link rel="stylesheet" type="text/css" href="css/viewcomm.css">
</head>

 
<script type="text/javascript">
function printlayer(layer)
{
   var generator=window.open(",'name,");
   var layertext = document.getElementById(layer);
   generator.document.write(layertext.innerHTML.replace("print Me"));
   
   generator.document.close();
   generator.print();
   generator.close();

}
</script>





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
	<li><a href="projects.php">ADD PROJECT</a></li>
	<li><a href="progress.php">PROJECT PROGRESS</a></li>
	<li><a href="viewproj.php">VIEW PROJECTS</a></li>
	<li><a href="../logout.php">LOGOUT</a></li>
  </ul>
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


	
	<div id="div-id-name">


    <table border="2" cellspacing="0" cellpadding="0" align=center>
        <thead>
            <tr>
                <th>PROJECT NAME</th>
				<th>COMMENT</th>
				
			
				
                
            </tr>
        </thead>
        <tbody>
		
		<?php
	include('conn.php');
	


$sql = "SELECT * FROM comments WHERE employee_name = '$email'";


if ($result = mysqli_query($conn, $sql)) {


    

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>
		<td>".$row["project_name"]."</td>
		<td>".$row["description"]."</td>
		
		
         
	
		</tr>";
    }


    

    mysqli_free_result($result);
}



mysqli_close($conn);
?>

        </tbody>
    </table>
</div>
 
</body>
</html>