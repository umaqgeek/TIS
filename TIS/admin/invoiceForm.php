<?php
include('../inc/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Invoice</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
	<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
        		<li><a href="invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<h1 align="center">INVOICE</h1>
                <br />
                <center>
                	Project Type :
                	<select>
                		<option id="0">======</option>
                    	<option id="1">project 1</option>
                	</select>
                    <br />
                    <br />
                    Customer ID :
                	<select>
                		<option id="0">======</option>
                    	<option id="1">cuctomer 1</option>
                	</select>
                </center>
                <br />
            	<table align="center" width="73%" border="1" bordercolor="#000000">
                	<tr>
                    	<td width="3%">No</td>
                        <td width="83%">Description</td>
                        <td width="7%">Quantity</td>
                        <td width="7%">Price</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>