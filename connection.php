<?php
$hostname = "localhost"; 
$username = "username";
$password = "password";

//connection to the server
$link = @mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

// connection databse
mysql_select_db("$db_name")or die("cannot select DB");
?>