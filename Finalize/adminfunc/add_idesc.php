<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$item_name = $_POST['item_name'];
		$invoice_id = $_POST['invoice_id'];

		for($x = 0; $x <sizeof('$item_name'); $x++){
			
			$sql = mysql_query("INSERT INTO item (invoice_id, item_name) 
			VALUES('$invoice_id', '$item_name[$x]')") 
			or die ("Error inserting data into table");
	
			$id = mysql_insert_id();
		
			$x++;
		}
		echo "success";
		mysql_close($conn);
		header("Location:../admin/invoice_form.php");
	
		
?>