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
	
	$sql1 = "SELECT * FROM user WHERE ic = '$id'";
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
        <div>
            <center>
            	<form action="pf_edit.php" method="post">
            		<table align="center" width="40%" border="1">
                		<tr>
                        	<input name="user_id" type="hidden" size="40" value="<?php echo  $user['user_id']; ?>" />
                    		<th width="30%">Name</th>
                        	<th width="70%"><input type="text" name="name" value="<?php echo  $user['name']; ?>" /></th>
                    	</tr>
                    	<tr>
                    		<th>IC No</th>
                        	<th><input type="text" name="ic" value="<?php echo  $user['ic']; ?>" /></th>
                    	</tr>
                    	<tr>
                    		<th>Date Of Birth</th>
                        	<th><input type="date" name="dob" value="<?php echo  $user['dob']; ?>" /></th>
                    	</tr>
                    	<tr>
                    		<th>No Phone</th>
                        	<th><input type="text" name="phone" value="<?php echo  $user['phone']; ?>" /></th>
                    	</tr>
                   	 	<tr>
                    		<th>Email</th>
                        	<th><input type="text" name="email" value="<?php echo  $user['email']; ?>" /></th>
                    	</tr>
                    	<tr>
                    		<th>Address</th>
                        	<th><textarea name="address"><?php echo  $user['address']; ?></textarea></th>
                    	</tr>
                	</table><br />
                <input type="submit" name="save" value="Save" />
      		</form>
            </center>
      	</div>
        <div>
        	<footer align="center">
            	<p><b>All Rights Reserved</b> &copy; Tuffah Informatics</p>
                <p><b><?php echo $name ?> || <?php echo $ic ?></b></p>
            </footer>
        </div>
</body>
</html>
<?php
	if(isset($_POST['save'])){
		$sql = "UPDATE user SET
				name = '$_POST[name]',
				ic = '$_POST[ic]',
				dob = '$_POST[dob]',
				phone = '$_POST[phone]',
				email = '$_POST[email]',
				address = '$_POST[address]'
				WHERE user_id = $_POST[user_id]";
			$res = mysql_query($sql) or die (mysql_error());
			echo "success";
			header("Location:profile.php");
		}
?>