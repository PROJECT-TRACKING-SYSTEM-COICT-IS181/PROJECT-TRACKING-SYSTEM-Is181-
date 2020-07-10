<?php
include('conn.php');
session_start();
session_unset();
session_destroy(); 
header("Cache-Control", "no-cache, no-store, must-revalidate");
header("Location: login.php");

exit();
?>

