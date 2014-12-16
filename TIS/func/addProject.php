<?php
	include("../inc/connect.php");
	
		$project_name = $_POST['project_name'];
		$project_code = $_POST['project_code'];
		$warranty = $_POST['warranty'];
		$start_warranty = $_POST['start_warranty'];
		$end_warranty = $_POST['end_warranty'];

		mysql_query("INSERT INTO project (project_name, project_code, warranty, start_warranty, end_warranty) VALUES('$project_name', '$project_code', '$warranty', '$start_warranty', '$end_warranty')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/project.php");
	
		//Closes specified connection
		mysql_close($conn);
?>