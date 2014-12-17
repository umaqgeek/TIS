<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM subitem WHERE sub_id = $id");
	echo "success delete data";
	header("Location:../admin/item.php");

?>