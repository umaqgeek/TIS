<?php 
	require("include/config.php");
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
	if (isset($_POST['submit'])){
		$connection
?>