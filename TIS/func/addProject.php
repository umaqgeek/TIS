<?php
	include("../inc/connect.php");
	
		$pname = $_POST['project_name'];
		$pcode = $_POST['project_code'];
		$warranty = $_POST['warranty'];
		$start = $_POST['start_warranty'];
		$end = $_POST['end_warranty'];

		mysql_query("INSERT INTO project (project_name, project_code, warranty, start_warranty, end_warranty) VALUES('$pname', '$pcode', '$warranty', '$start', '$end')") or die ("Error inserting data into table");
	
		echo "success";
	
		//Closes specified connection
		mysql_close($conn);
?>