<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'book_store'); 
define('DB_USER', 'root'); 
define('DB_PASSWORD',''); 

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to database: " . mysqli_error($con)); 
?>