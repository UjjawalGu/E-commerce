<?php
$server = "localhost";
$user = "root";
$password ="";
$db_name ="ujwal";


// Create aConnection
$conn = new  mysqli($server,$user,$password,$db_name);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>