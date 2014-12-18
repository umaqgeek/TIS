<?php
	include("../inc/connect.php");
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$address = $_POST['address'];
		$postcode = $_POST['postcode'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];
		$level = $_POST['level'];

		mysql_query("INSERT INTO users (username, password, name, ic, address, postcode, state, country, phone, level) VALUES('$username', '$password', '$name', '$ic', '$address', '$postcode', '$state', '$country', '$phone', '$level')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/staff.php");
	
		//Closes specified connection
		mysql_close($conn);
?>