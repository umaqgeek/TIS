<?php
include('../inc/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?></title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
	<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="#"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="#">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div align="center">
            	<img src="../img/login logo.png" /><br /><br />
    			<h1>Welcome to <?php echo $companyname; ?> Invoice System</h1>
                <img src="../img/invoice icon.png" />
            </div>
        </div>
    </div>
</body>
</html>