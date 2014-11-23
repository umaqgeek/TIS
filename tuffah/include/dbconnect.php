<?php
$dbhost = 'localhost';
$dbuser = 'root'; 
$dbpass = ''; 
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
$db = 'tis';
mysql_select_db($db);
?>
