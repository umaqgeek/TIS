<?php
$dbhost = 'localhost';
$dbuser = 'root'; 
$dbpass = ''; 
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
$db = 'invoice';
mysql_select_db($db);
?>
