<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM users WHERE user_id = $id");
	echo "success delete data";
	header("Location:../admin/users.php");

?>