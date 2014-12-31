<?php
include('../inc/connect.php');
	
	$sql = "SELECT * FROM project";
	$sql1 = "SELECT * FROM invoice";
	$sql2 = "SELECT * FROM clients";
	$sql3 = "SELECT * FROM item";
	
	$res = mysql_query($sql) or die (mysql_error());
	$res1 = mysql_query($sql1) or die (mysql_error());
	$res2 = mysql_query($sql2) or die (mysql_error());
	$res3 = mysql_query($sql3) or die (mysql_error());
?>
