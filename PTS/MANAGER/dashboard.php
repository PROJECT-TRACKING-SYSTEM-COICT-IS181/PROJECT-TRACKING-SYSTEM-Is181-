<?php
  session_start(); 
  $email=$_SESSION['employee_name'];
  if(!$email)
  {
	  header("Location: login.php");
  }
  
  ?>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "project_tracker");  
 $query = "SELECT progress, count(*) as project_name FROM progress GROUP BY progress";  
 $result = mysqli_query($connect, $query);  
 ?> 

<!DOCTYPE html>
<html>
<head>

<title>Dashboard </title>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['progress', 'project_name'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["progress"]."', ".$row["project_name"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'PROJECT PROGRESS PERCENTAGE',  
                      //is3D:true,  
                      pieHole: 0.6  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

</head>
 
<body>



<!-- header --> 
<div class="header">
<div class="header-left">
	<h1>PROJECT TRACKING SYSTEM</h1>
	
<div class="header-right">
	<h2>Logged in as: <?php echo $email; ?></h2>
</div>

</div>
</div>







<!--sidenav-->
<div class="sidenav">
	
	<a href="viewproj.php">View Projects</a>
	<a href="viewprog.php">View Progress</a>
	<a href="../logout.php">Logout</a>
</div>
   
           <br /><br />  
           <div style="width:900px;">  
                 
                <br />  
                <div id="piechart"></div>  
           </div>  
	
      </body>  
 </html>  
