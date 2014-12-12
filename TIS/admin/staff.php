<?php 
	include('../inc/config.php');
	
	$sql = "SELECT * FROM users";
	$res = mysql_query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Staff</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
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
            	<table width="1061" border="0" rules="all" align="center">
                	<tr>
                    	<th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>IC</th>
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>State</th>
                        <th>County</th>
                        <th>Phone</th>
                        <th>Level</th>
                   	<tr>
                    
                    <?php
						while($user = mysql_fetch_assoc($res)){
							echo "<tr>";
							echo "<td>".$users['id']."</td>";
							echo "<td>".$users['username']."</td>";
							echo "<td>".$users['password']."</td>";
							echo "<td>".$users['name']."</td>";
							echo "<td>".$users['ic']."</td>";
							echo "<td>".$users['address']."</td>";
							echo "<td>".$users['postcode']."</td>";
							echo "<td>".$users['state']."</td>";
							echo "<td>".$users['country']."</td>";
							echo "<td>".$users['phone']."</td>";
							echo "<td>".$users['level']."</td>";
							echo "</tr>";
						}
					?>
                    
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="../func/addStaff.php" method="post">
                	<table align="center">
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
                        	<td><input name="address" type="text" /></td>
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