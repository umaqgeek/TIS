<?php
	include("../inc/connect.php");
	
		$iname = $_POST['item_name'];
		$siname = $_POST['subitem_name'];
		$price = $_POST['price'];

		mysql_query("INSERT INTO item (item_name, subitem_name, price) VALUES('$iname', '$siname', '$price')") or die ("Error inserting data into table");
	
		echo "success";
	
		//Closes specified connection
		mysql_close($conn);
?>