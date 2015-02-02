<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM user WHERE user_id = $id");
	echo "success delete data";
	header("Location:users.php");

?>