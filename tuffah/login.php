<?php
require ("config.php");

if(isset($_POST['username'])){
	$username = $_POST['uername'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE username='" .$username. "' AND password='" .$password. "LIMIT 1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res) <=0 ){
		header("Location:menu.php");
		exit();
	}
	else{
		echo "Invalid login Information";
		exit();
	}
}
?>