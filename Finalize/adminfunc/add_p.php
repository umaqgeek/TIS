<?php
	include("../inc/connect.php");

		$project_code = $_POST['project_code'];
		$project_name = $_POST['project_name'];
		$warranty_month = $_POST['warranty_month'];

		mysql_query("INSERT INTO project (project_code, project_name, warranty_month) VALUES('$project_code', '$project_name', $warranty_month)") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:insert_idata.php");
	
		//Closes specified connection
		mysql_close($conn);
?>