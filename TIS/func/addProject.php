<?php
	include("../inc/connect.php");
	
		$project_name = $_POST['project_name'];
		$project_code = $_POST['project_code'];
		$warranty = $_POST['warranty'];

		mysql_query("INSERT INTO project (project_name, project_code, warranty) VALUES('$project_name', '$project_code', '$warranty')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:../admin/project.php");
	
		//Closes specified connection
		mysql_close($conn);
?>