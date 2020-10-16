<?php
	include('conn.php');
	
	
	$name=$_POST['employee_name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$phoneno=$_POST['phone_number'];
    $empcode=$_POST['employee_id'];
	$des=$_POST['designation'];
    
	mysqli_query($conn,"insert into registration (employee_name, password, email, phone_number,  employee_id, designation) values ('$name', '$password', '$email', '$phoneno',  '$empcode', '$des')");
	  ?>
        <script language="JavaScript">
            alert('Successfully registered. You can now login');
            document.location='index.php';
        </script>
        
	
	



