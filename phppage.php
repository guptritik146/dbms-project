<?php
$hostname = "localhost";
$username = "root";
$password = "test123";
 $con = mysql_connect($hostname, $username, $password) ;
if (!$con)
{ die('Could not connect: '. mysql_error());}
$dbName="test";
$db = mysql_select_db($dbName,$con);
mysql_close($con);
?>
