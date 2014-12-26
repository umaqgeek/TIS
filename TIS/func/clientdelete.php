<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM clients WHERE client_id = $id");
	echo "success delete data";
	header("Location:../admin/client.php");

?>