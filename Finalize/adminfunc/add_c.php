<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$client_name = $_POST['client_name'];
		$company_name = $_POST['company_name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];

		mysql_query("INSERT INTO clients (client_name, company_name, address, phone) VALUES('$client_name', '$company_name', '$address', '$phone')") or die ("Error inserting data into table");
	
		echo "success";
		mysql_close($conn);
		header("Location:insert_p.php .$_GET[client_id]");
	
?>