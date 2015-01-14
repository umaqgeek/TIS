<?php
	include("../inc/connect.php");

		//print_r($_POST); die();
		$project_code = $_POST['project_code'];
		$project_name = $_POST['project_name'];
		$warranty_month = $_POST['warranty_month'];

		mysql_query("INSERT INTO project (project_code, project_name, warranty_month) VALUES('$project_code', '$project_name', '$warranty_month')") or die ("Error inserting data into table");
	
		echo "success";
		mysql_close($conn);
		header("Location:insert_idata.php");
	
		
?>