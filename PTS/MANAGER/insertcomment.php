<?php 

require_once 'conn.php';
if (isset($_POST['send'])) {
	
		$pn = $_POST['project_name'];
		$ei = $_POST['employee_id'];
		$en = $_POST['employee_name'];
		$email = $_POST['email'];
		$desc = $_POST['description'];
		
		
mysqli_query($conn,"insert into comments (project_name, employee_id, employee_name, email, description) values ('$pn', '$ei', '$en', '$email', '$desc')");

 
}
  ?>
    
        <script language="JavaScript">
            alert('Comment sent');
            document.location='dashboard.php';
        </script>

