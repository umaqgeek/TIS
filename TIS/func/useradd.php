<?php
	include("../inc/connect.php");
	
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$level = $_POST['level'];

		mysql_query("INSERT INTO users (username, password, name, ic, address,  phone, level) VALUES('$username', '$password', '$name', '$ic', '$address',  '$phone', '$level')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/users.php");
	
		//Closes specified connection
		mysql_close($conn);
?>