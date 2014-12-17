<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM item WHERE item_id = $id");
	echo "success delete data";
	header("Location:../admin/item.php");

?>