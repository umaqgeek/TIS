<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$inv_code = $_POST['inv_code'];
		$client_id = $_POST['client_id'];
		$pro_id = $_POST['pro_id'];
		$inv_date = $_POST['inv_date'];
		$inv_due = $_POST['inv_due'];

		mysql_query("INSERT INTO invoice (inv_code, client_id, pro_id, inv_date, inv_due) VALUES('$inv_code', '$client_id', '$pro_id', '$inv_date', '$inv_due')") or die (mysql_error()."Error inserting data into table");
		
		$id = mysql_insert_id();
	
		echo "success";
		mysql_close($conn);
		header("Location:create_item.php?id=".$id);
	
?>