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
        		<li><a href="invoice.php">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div class="m">
            	<table width="524" align="center">
                	<tr>
                		<td align="center"><a href="staff.php"><img src="../img/images.png" width="158" height="158" /></a><br /><center>Staff</center></td>
                        <td align="center"><a href="project.php"><img src="../img/download.jpg" width="158" height="158" /></a><br /><center>Project</center></td>
                	</tr>
               	</table>
                <br />
                <br />
                <table width="694" align="center">
                	<tr>
                    	<td width="203" align="center"><a href="client.php"><img src="../img/download (4).jpg" width="158" height="158" /></a><br /><center>Client</center></td>
                        <td width="203" align="center"><a href="item.php"><img src="../img/download (3).jpg" width="158" height="158" /></a><br /><center>Item</center></td>
                        <td width="223" align="center"><a href="invlist.php"><img src="../img/invoice icon.png" width="158" height="158" /></a><br /><center>Invoice</center></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>