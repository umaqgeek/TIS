<?php
 session_start();
 if(empty($_SESSION['name']))
   {    
	header('location:~/../../index.php');
   }
?>
<?php
include('../inc/config.php');
include('../inc/connect.php');

	$name = $_SESSION['name'];
	$sql = "SELECT * FROM users WHERE name = '$name'";
	$res = mysql_query($sql) or die('Query failed. ' . mysql_error());
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	
	$name = $row['name'];
	$ic = $row['ic'];
	
	$id= $_GET['view'];
	$sql1 = "SELECT * FROM invoice WHERE invoice_id = $id";
	$res1 = mysql_query($sql1) or die (mysql_error());
	$inv = mysql_fetch_array($res1);
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
        		<li><a href="../admin/index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="#">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
        <div class="content">
            <div>
            	<form action="../admin/invoice.php" method="post">
                	<table width="182" border="2" align="center">
                    	      <th colspan="3">INVOICE</th>
                        <tr>
                        	<th width="86">Invoice ID</th>
                        	<th width="78"><?php echo  $inv['invoice_id']; ?></th>
                        </tr>
                    	<tr>
                        	<th>Client ID</th>
                        	<th><?php echo  $inv['client_id']; ?></th>
                        </tr>
                    	<tr>
                        	<th>project ID</th>
                        	<th><?php echo  $inv['project_id']; ?></th>
                        </tr>
                        <tr>
                        	<th>Date</th>
                        	<th><?php echo  $inv['date']; ?></th>
                        </tr>
                        <tr>
                        	<th>Due Date</th>
                        	<th><?php echo  $inv['due_date']; ?></th>
                        </tr>
                        <tr>
                        	<th>Total</th>
                        	<th><?php echo  $inv['total']; ?></th>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="back" type="submit" value="Back" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>