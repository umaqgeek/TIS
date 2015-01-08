<?php
	include("../inc/connect.php");
	
		$invoice_id = $_POST['invoice_id'];
		$item_name = $_POST['item_name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

		mysql_query("INSERT INTO item (invoice_id, item_name, quantity, price) VALUES('$invoice_id', '$item_name', '$quantity', '$price')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../staff/invoice_form.php");
	
		//Closes specified connection
		mysql_close($conn);
?>