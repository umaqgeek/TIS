<?
$user = "root";
$pass = "";
$host = "localhost";
$db = "invoice";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM staff WHERE username = '".$username."' AND password = '".$password."'LIMIT 1";
	$res = $sql_query($sql);
	if (mysql_num_rows($res)==1){
		echo "you have logged in";
		exit();
	}
	else{
		echo "invalid. you have wrong username/password";
		exit();
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tuffah Invoice System</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.cus.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap_custom.css">
</head>

<body>
<div class="wrapper">
<div class="container">
<img src="image/tuffah1.jpg" width="940" height="220" />
<div class="page-header">
<h4><small>Tuffah Informatics | Tuffah Invoice System Version 1.0.1</small></h4>
</div>
<div class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="container" style="width:auto;">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a class="brand" href="#">Tuffah Invoice System</a>
<div class="nav-collapse">
<ul class="nav">
<li><a tabindex="-1" href="tuffah.info">About</a></li>
</ul>
</div>
</div>
</div>

</div>
<div class="push">
<div align="center">
Welcome To Tuffah Invoice System Version 1.0.1 .           
</div>

<br />
<div align="center">
<center><fieldset style="width:50%">
<h1>TUFFAH INVOICE SYSTEM</h1>
<form method="post" action="index.php">
Username<br />
<input type="text" name="user" size="40" /><br />
Password<br />
<input type="password" name="pass" size="40" /><br />
<input id="button" type="submit" name="submit" value="Login" /></form></fieldset>
</center></div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <footer class="container">
            <p>Copyright &copy; <a href="#">Tuffah Informatics</a>2014</p>
            <p><b>Now you can view at Internet Explorer, Firefox, Safari and Chrome in This Version</b></p>
      </footer>
</div>
</body>
</html>