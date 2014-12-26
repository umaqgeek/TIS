<?php
include('../inc/config.php');
include('../inc/connect.php');
	if(isset($_GET['modify'])){
		$id= $_GET['modify'];
		$sql = "SELECT * FROM users WHERE user_id = $id";
		$res = mysql_query($sql) or die (mysql_error());
		$user = mysql_fetch_array($res);
	}
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
                <li><a href="../admin/manage.php">Manage System</a></li>
        		<li><a href="../admin/invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
            <div>
            	<form action="usermodify.php" method="post">
                	<table align="center">
                    	<th colspan="2">MODIFY USERS</th>
                    	<tr>
                        	<td>Username</td>
                        	<td><input name="username" type="text" size="40" value="<?php echo  $user['username']; ?>" /></td>
                        </tr>
                    	<tr>
                        	<td>Password</td>
                        	<td><input name="password" type="text" size="40" value="<?php echo  $user['password']; ?>" /></td>
                        </tr>
                    	<tr>
                        	<td>Name</td>
                        	<td><input name="name" type="text" size="40" value="<?php echo  $user['name']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>IC</td>
                        	<td><input name="ic" type="text" size="40" value="<?php echo  $user['ic']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Address</td>
                        	<td><textarea name="address" cols="40"><?php echo  $user['address']; ?></textarea></td>
                        </tr>
                        <tr>
                        	<td>Phone</td>
                        	<td><input name="phone" type="text" size="40" value="<?php echo  $user['phone']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Level</td>
                        	<td><input name="level" type="text" size="40" value="<?php echo  $user['level']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td></td>
                        	<td><input name="user_id" type="hidden" size="40" value="<?php echo  $user['user_id']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="submit" type="submit" value="submit" /></td>
                        </tr>
                    </table>                 
                </form>
                <?php
					if(isset($_POST['submit'])){
						$sql = "UPDATE users SET username = '$_POST[username]',
								password = '$_POST[password]',
								name = '$_POST[name]',
								ic = '$_POST[ic]',
								address = '$_POST[address]',
								phone = '$_POST[phone]',
								level = '$_POST[level]'
								WHERE user_id = $_POST[user_id]";
						$res = mysql_query($sql) or die (mysql_error());
						echo "success";
						header("Location:../admin/staff.php");
					}
				?>
            </div>
        </div>
    </div>
</body>
</html>