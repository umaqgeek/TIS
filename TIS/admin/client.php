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
        		<li><a href="invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<table width="1015" border="0" rules="all" align="center">
                	<tr>
                    	<td width="16">ID</td>
                        <td width="64">Client Name</td>
                        <td width="60">Company Name</td>
                        <td width="180">Address</td>
                        <td width="57">Postcode</td>
                        <td width="83">State</td>
                        <td width="51">County</td>
                        <td width="80">Phone</td>
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Client Name</td>
                        	<td><input name="cname" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Address</td>
                        	<td><input name="addr" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Postcode</td>
                        	<td><input name="postcode" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>state</td>
                        	<td><input name="state" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Country</td>
                        	<td><input name="country" type="text" /></td>
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