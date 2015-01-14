<?php
	include("../inc/connect.php");
		
		//print_r($_POST); die();
		$client_id = $_POST['client_id'];
		$project_id = $_POST['project_id'];
		$date = $_POST['date'];
		$due_date = $_POST['due_date'];

		mysql_query("INSERT INTO invoice (client_id, project_id, date, due_date) VALUES('$client_id', '$project_id', '$date', '$due_date')") or die (mysql_error()."Error inserting data into table");
		
		$id = mysql_insert_id();
	
		echo "success";
		mysql_close($conn);
		header("Location:insert_idesc.php?id=".$id);
	
?>