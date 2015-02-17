<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$inv_id = $_POST['inv_id'];
		$item_name = $_POST['item_name'];
		$item_quantity = $_POST['item_quantity'];
		$item_price = $_POST['item_price'];
		$item_total = $_POST['item_total'];
		
		$i = sizeof($item_name);

		for($x = 0; $x < $item; $x++) {
			
			if ($item_name[$x] != '') {
			
				$sql = mysql_query("INSERT INTO item (inv_id, item_name, item_quantity, price, item_total) 
				VALUES('".$inv_id."', '".$item_name[$x]."', '".$item_quantity[$x]."', '".$item_price[$x]."', '".$item_total[$x]."')") 
				or die ("Error inserting data into table");
		
				$id = mysql_insert_id();
			
			}
		}
		echo "success";
		mysql_close($conn);
		header("Location:invoice_form.php");
	
		
?>