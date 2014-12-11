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
            	<table width="550" border="0" rules="all" align="center">
                	<tr>
                    	<td width="16">ID</td>
                        <td width="57">Project</td>
                        <td width="91">Project Code</td>
                        <td width="102">Warannty</td>
                        <td width="104">Start Project</td>
                        <td width="154">End Project</td>
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Project</td>
                        	<td><input name="pname" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Project Code</td>
                        	<td><input name="pcode" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Warranty</td>
                        	<td><input name="warranty" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Start Project</td>
                        	<td><input name="start" type="date" /></td>
                        </tr>
                        <tr>
                        	<td>End Project</td>
                        	<td><input name="end" type="date" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right"><span><input name="add" type="submit" value="add" /></span><span><input name="reset" type="reset" value="reset" /></span></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>