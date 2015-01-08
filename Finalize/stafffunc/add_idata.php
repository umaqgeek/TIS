<?php
	include("../inc/connect.php");
	
		$client_id = $_POST['client_id'];
		$project_id = $_POST['project_id'];
		$date = $_POST['date'];
		$due_date = $_POST['due_date'];

		mysql_query("INSERT INTO invoice (client_id, project_id, date, due_date) VALUES('$client_id', '$project_id', '$date', '$due_date')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:insert_idesc.php");
	
		//Closes specified connection
		mysql_close($conn);
?>