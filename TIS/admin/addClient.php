<?php
	include("../inc/connect.php");
	
		$client_name = $_POST['client_name'];
		$company_name = $_POST['company_name'];
		$address = $_POST['address'];
		$postcode = $_POST['postcode'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];

		mysql_query("INSERT INTO clients (client_name, company_name, address, postcode, state, country, phone) VALUES('$client_name', '$company_name', '$address', '$postcode', '$state', '$country', '$phone')") or die ("Error inserting data into table");
	
		echo "success";
	
		//Closes specified connection
		mysql_close($conn);
?>