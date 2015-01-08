<?php
include("config.php");

$conn = mysql_connect($host, $user, $pswd) 
or die ("Error connecting to MySQL");
mysql_select_db($dbname) or
die ("Error connecting to Database: ".$dbname);

?>