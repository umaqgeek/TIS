<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM users WHERE id = $id");
	echo "success delete data";
	header("Location:../admin/staff.php");

?>