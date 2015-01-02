<?php
	include("../inc/connect.php");
	
	$id = $_GET['delete'];
	mysql_query("DELETE FROM project WHERE project_id = $id");
	echo "success delete data";
	header("Location:../admin/project.php");

?>