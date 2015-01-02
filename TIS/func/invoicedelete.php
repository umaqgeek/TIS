<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM invoice WHERE invoice_id = $id");
	echo "success delete data";
	header("Location:../admin/invoice.php");

?>