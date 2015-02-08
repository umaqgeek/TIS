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
	$sql1 = "SELECT * FROM user WHERE user_id = $id";
	$res1 = mysql_query($sql1) or die (mysql_error());
	$user = mysql_fetch_array($res1);
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
                <li><a href="register.php">Register</a></li>
        		<li><a href="create_invoice.php">Create Invoice</a></li>
                <li><a href="profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        <br /><br />
        <div align="center">
        	<form action="user_list.php" method="post">
            	<table width="30%" border="2" align="center">
                	<th colspan="3">USER</th>
                    <tr>
                    	<th width="50%">User ID</th>
                        <th width="50%"><?php echo  $user['user_id']; ?></th>
                   	</tr>
                   	<tr>
                    	<th>Username</th>
                       	<th><?php echo  $user['username']; ?></th>
                   	</tr>
                   	<tr>
                    	<th>Password</th>
                    	<th><?php echo  $user['password']; ?></th>
                  	</tr>
                    <tr>
                    	<th>Name</th>
                      	<th><?php echo  $user['name']; ?></th>
                   	</tr>
                    <tr>
                       	<th>IC No</th>
                        <th><?php echo  $user['ic']; ?></th>
                  	</tr>
                    <tr>
                        <th>Phone No</th>
                        <th><?php echo  $user['phone']; ?></th>
                   	</tr>
                    <tr>
                        <th>Date Of Birth</th>
                        <th><?php echo  $user['dob']; ?></th>
                   	</tr>
                    <tr>
                        <th>Email</th>
                        <th><?php echo  $user['email']; ?></th>
                   	</tr>
                    <tr>
                        <th>Address</th>
                        <th><?php echo  $user['address']; ?></th>
                   	</tr>
                    <tr>
                        <th>Position</th>
                        <th><?php echo  $user['position']; ?></th>
                   	</tr>
                    <tr>
                     	<th>Level</th>
                        <th><?php echo  $user['level']; ?></th>
                   	</tr>
					<tr>
                        <td colspan="2" align="center"><input name="back" type="submit" value="Back" /></td>
                    </tr>
               	</table>                 
       	  </form>
        <br />
        <div>
        	<footer align="center">
            	<p><b>All Rights Reserved</b> &copy; Tuffah Informatics</p>
                <p><b><?php echo $name ?> || <?php echo $ic ?></b></p>
            </footer>
        </div>
     </div>
</body>
</html>