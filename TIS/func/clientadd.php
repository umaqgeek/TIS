<?php
	include("../inc/connect.php");
	
		$client_id = $_POST['client_id'];
		$client_name = $_POST['client_name'];
		$company_name = $_POST['company_name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];

		mysql_query("INSERT INTO clients (client_id, client_name, company_name, address, phone) VALUES('$client_id', '$client_name', '$company_name', '$address', '$phone')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/project_insert.php");
	
		//Closes specified connection
		mysql_close($conn);
?>