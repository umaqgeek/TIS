<?php
	include("../inc/connect.php");

		$project_code = $_POST['project_code'];
		$project_name = $_POST['project_name'];

		mysql_query("INSERT INTO project (project_code, project_name) VALUES('$project_code', '$project_name')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/project.php");
	
		//Closes specified connection
		mysql_close($conn);
?>