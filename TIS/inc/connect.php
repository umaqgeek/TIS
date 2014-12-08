<?php
include("config.php");

$conn = mysql_connect($host, $user, $pswd) 
or die ("Error connecting to MySQL");
echo "Connected to MySQL <br />";
mysql_select_db($dbname) or
die ("Error connecting to Database: ".$dbname);
echo "Connected to Database <br />";

?>