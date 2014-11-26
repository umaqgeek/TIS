<?php 
include ('inc/config.php');

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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?>-Log In</title>
</head>

<body>
<div id="wrapper">
	<?php include_once("inc/header.php"); ?>
    <br />
    <?php include_once("inc/login.php"); ?>
</div>
</body>
</html>