<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM client WHERE client_id = $id");
	echo "success delete data";
	header("Location:client_list.php");

?>