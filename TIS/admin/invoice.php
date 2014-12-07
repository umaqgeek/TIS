<?php
include('../inc/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Manage System</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

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
            	<table rules="all" align="center">
                	<tr>
                    	<td>ID</td>
                        <td>Date</td>
                        <td>Invoice#</td>
                        <td>Customer ID</td>
                        <td>Due Date</td>
                        <td>Bill To</td>
                        <td>Total</td>
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Date</td>
                        	<td><input name="date" type="date" /></td>
                        </tr>
                        <tr>
                        	<td>Invoice #</td>
                        	<td><input name="inv" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Due Date</td>
                        	<td><input name="ddate" type="date" /></td>
                        </tr>
                        <tr>
                        	<td>Bill To</td>
                        	<td><input name="bill" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Total</td>
                        	<td><input name="total" type="text" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right"><input name="add" type="button" value="add" /><input name="reset" type="button" value="reset" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>