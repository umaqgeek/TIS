<?php
	include("../inc/connect.php");
	
		$client_name = $_POST['client_name'];
		$company_name = $_POST['company_name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];

		mysql_query("INSERT INTO clients (client_name, company_name, address, phone) VALUES('$client_name', '$company_name', '$address', '$phone')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:insert_p.php");
	
		//Closes specified connection
		mysql_close($conn);
?>