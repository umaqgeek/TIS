<?php
	include("../inc/connect.php");
		
		$sub_name = $_POST['sub_name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

		mysql_query("INSERT INTO subitem (sub_name, quantity, price) VALUES('$sub_name', '$quantity', '$price')") or die ("Error inserting data into table subitem");
	
		echo "success";
		header("Location:../admin/item.php");
	
		//Closes specified connection
		mysql_close($conn);
?>