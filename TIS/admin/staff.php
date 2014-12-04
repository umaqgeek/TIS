<?php include('../inc/config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Staff</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
<body>
	<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
        		<li><a href="#">Invoice</a></li>
        		<li><a href="#">Contact Us</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<table width="550" border="1" align="center">
                	<tr>
                    	<td width="17">ID</td>
                        <td width="68">Username</td>
                        <td width="64">Password</td>
                        <td width="112">Name</td>
                        <td width="109">IC</td>
                        <td width="86">Level</td>
                    </tr>
                    <tr>
                    	<td>1</td>
                        <td>kamarul94</td>
                        <td>marul94</td>
                        <td>kamalrul bin rizam</td>
                        <td>941020-01-5897</td>
                        <td>staff</td>
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Username</td>
                        	<td></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                        	<td></td>
                        </tr>
                        <tr>
                        	<td>Name</td>
                        	<td></td>
                        </tr>
                        <tr>
                        	<td>IC</td>
                        	<td></td>
                        </tr>
                        <tr>
                        	<td>Level</td>
                        	<td></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>