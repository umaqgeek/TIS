<?php
require ("dbconnect.php");

if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE username='" .$username. "' AND password='" .$password. "' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	if (mysql_num_rows($res) == 1 ){
		header("Location:menu.php");
		exit();
	}
	else{
		header("Location:index.php");
		exit();
	}
}
?>