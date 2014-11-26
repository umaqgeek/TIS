<?php 
require("config.php"); 

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM staff WHERE username = '".$username."' AND password = '".$password."'LIMIT 1";
	$res = $sql_query($sql);
	if (mysql_num_rows($res)==1){
		$_SESSION['auth'] = true;
		header ("Location:menu.php");
		exit();
	}
	else{
		echo "Invalid Login. Your Username/Password was Wrong";
		exit();
	}
}
?>