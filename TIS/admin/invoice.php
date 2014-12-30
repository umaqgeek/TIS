<?php
include('../inc/config.php');
include('../inc/connect.php');
	
	$sql = "SELECT * FROM invoice";
	
	$res = mysql_query($sql) or die (mysql_error());
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
        		<li><a href="invoice.php">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div align="center">
            	<h1 align="center">INVOICE</h1>
                <br />
                <form action="" method="post" style="width:70%">
        			<table align="left">
            			<tr>
                			<td>FROM</td>
                    		<td><textarea name=""></textarea></td>
                		</tr>
                		<tr>
                			<td>TO</td>
                    		<td><textarea name=""></textarea></td>
                		</tr>
            		</table>
            		<table align="right">
            			<tr>
                			<td>Date</td>
                    		<td><input name="" type="date" value="" /></td>
                		</tr>
                		<tr>
                			<td>INVOICE #</td>
                    		<td><input type="text" value="" size="10" /></td>
                		</tr>
                        <tr>
                			<td>Customer ID</td>
                    		<td><input type="text" value="" size="10" /></td>
                		</tr>
                        <tr>
                			<td>Due Date</td>
                    		<td><input name="" type="date" value="" /></td>
                		</tr>
            		</table>
                    <br />
					<table align="center" width="100%" border="1">
                		<tr>
                    		<th width="6%">No</th>
                        	<th width="85%">Description</th>
                        	<th width="6%">Quantity</th>
                        	<th width="3%">Price</th>
                    	<tr>
                    	
                        <?php
						
							
						
						?>
                	</table>
</body>
</html>