<?php
$servername = "ftp.shadelinks.com:21";
$username = "shadelinks77";
$password = "Sunshinekpl@77";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>