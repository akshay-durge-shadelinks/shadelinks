<?php
//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="ftp.shadelinks.com";
$username="shadelinks-77";
$password="Sunshinekpl@77";
$dbname="shadelinks";
$usertable="data";
$yourfield = "your_field";


mysql_select_db($dbname);

# Check If Record Exists

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result)
{
  while($row = mysql_fetch_array($result))
  {
    $name = $row["$yourfield"];
    echo "Name: ".$name."<br/>";
  }
}
?>