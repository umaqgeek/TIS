<?php
	session_start();
	if(empty($_SESSION['ic'])){    
		header('location:~/../../index.php');
 	}
 	include('../inc/config.php');
	include('../inc/connect.php');
	
	$id = $_SESSION['ic'];
	$sql = "SELECT * FROM user WHERE ic = '$id'";
	$res = mysql_query($sql) or die('Query failed. ' . mysql_error());
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	
	$name = $row['name'];
	$ic = $row['ic'];
	
	$id= $_GET['view'];
	$sql1 = "SELECT * FROM client WHERE client_id = $id";
	$res1 = mysql_query($sql1) or die (mysql_error());
	$cli = mysql_fetch_array($res1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
	<div>
    	<div>
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/logo.png" width="180" height="60" /></a></li>
        		<li><a href="create_invoice.php">Create Invoice</a></li>
                <li><a href="profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        <br /><br />
        <div align="center">
    		<form action="client_list.php" method="post">
            	<table width="30%" border="2" align="center">
                	<th colspan="3">CLIENT</th>
                    <tr>
                    	<th width="50%">Client ID</th>
                        <th width="50%"><?php echo  $cli['client_id']; ?></th>
                   	</tr>
                    <tr>
                    	<th width="50%">Client Code</th>
                        <th width="50%"><?php echo  $cli['client_code']; ?></th>
                   	</tr>
                   	<tr>
                    	<th>Client Name</th>
                       	<th><?php echo  $cli['client_name']; ?></th>
                   	</tr>
                   	<tr>
                    	<th>Company Name</th>
                    	<th><?php echo  $cli['client_comp']; ?></th>
                  	</tr>
                    <tr>
                        <th>Address</th>
                        <th><?php echo  $cli['comp_address']; ?></th>
                   	</tr>
                   	<tr>
                     	<th>No Phone</th>
                        <th><?php echo  $cli['comp_phone']; ?></th>
                   	</tr>
					<tr>
                        <td colspan="2" align="center"><input name="back" type="submit" value="Back" /></td>
                    </tr>
               	</table>                 
       	  </form>
        </div>
    	<div>
        	<footer align="center">
            	<p><b>All Rights Reserved</b> &copy; Tuffah Informatics</p>
                <p><b><?php echo $name ?> || <?php echo $ic ?></b></p>
            </footer>
        </div>
	</div>
</body>
</html>