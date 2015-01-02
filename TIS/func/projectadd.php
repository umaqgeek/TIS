<?php
	include("../inc/connect.php");

		$project_code = $_POST['project_code'];
		$project_name = $_POST['project_name'];
		$warranty = $_POST['warranty'];

		mysql_query("INSERT INTO project (project_code, project_name, warranty) VALUES('$project_code', '$project_name', $warranty)") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/project.php");
	
		//Closes specified connection
		mysql_close($conn);
?>