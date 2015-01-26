<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$invoice_id = $_POST['invoice_id'];
		$item_name = $_POST['item_name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		
		$item = sizeof($item_name);

		for($x = 0; $x < $item; $x++) {
			
			if ($item_name[$x] != '') {
			
				$sql = mysql_query("INSERT INTO item (invoice_id, item_name, quantity, price) 
				VALUES('".$invoice_id."', '".$item_name[$x]."', '".$quantity[$x]."', '".$price[$x]."')") 
				or die ("Error inserting data into table");
		
				$id = mysql_insert_id();
			
			}
		}
		echo "success";
		mysql_close($conn);
		header("Location:../admin/invoice_form.php");
	
		
?>