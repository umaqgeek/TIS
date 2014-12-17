<?php
	include("../inc/connect.php");
	
		$item_name = $_POST['item_name'];

		mysql_query("INSERT INTO item (item_name) VALUES('$item_name')") or die ("Error inserting data into table item");
	
		echo "success";
		header("Location:../admin/item.php");
	
		//Closes specified connection
		mysql_close($conn);
?>