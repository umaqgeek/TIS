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
	
	$sql1 = "SELECT * FROM users";
	$res1 = mysql_query($sql1) or die (mysql_error());
	
	
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
    		<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="#">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
        <div class="content">
        	<div>
            	<table border="1" align="center">
                	<tr>
                    	<th colspan="13">USERS</th>
                    </tr>
                	<tr>
                    	<th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                   	<tr>
                    
                    <?php
						$i=1;
						while($user = mysql_fetch_array($res1)){
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$user['username']. "</td>";
							echo "<td align='center'>" .$user['password']. "</td>";
							echo "<td align='center'>" .$user['name']. "</td>";
							
							echo "<td align='center'><a href='../adminfunc/userview.php?view=$user[user_id]'>View</a></td>";
							echo "<td align='center'><a href='../adminfunc/userdelete.php?delete=$user[user_id]'>Delete</a></td>";
							
							echo "</tr>";
							
							$i++;
						}
					?>
                    
                    </tr>
                </table>
                <hr />
            	<hr />
            </div>
            <div>
            	<form action="../adminfunc/useradd.php" method="post">
                	<table align="center">
                    	<th colspan="2">ADD USERS</th>
                    	<tr>
                        	<td>Username</td>
                        	<td><input name="username" type="text" /></td>
                        </tr>
                    	<tr>
                        	<td>Password</td>
                        	<td><input name="password" type="text" /></td>
                        </tr>
                    	<tr>
                        	<td>Name</td>
                        	<td><input name="name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>IC</td>
                        	<td><input name="ic" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Address</td>
                        	<td><textarea name="address"></textarea></td>
                        </tr>
                        <tr>
                        	<td>Phone</td>
                        	<td><input name="phone" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Level</td>
                        	<td><input name="level" type="text" /></td>
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