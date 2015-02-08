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
        	<table border="1" align="center">
            	<tr>
                	<th colspan="13">Clients</th>
                </tr>
                <tr>
                	<th>ID</th>
                	<th>Client Code</th>
                    <th>Client Name</th>
                    <th>Company Name</th>
                    <th colspan="2">Action</th>
               		
                    <tr>
                	<?php
						$sql1 = "SELECT * FROM client";
						$res1 = mysql_query($sql1) or die('Query failed. ' . mysql_error());
						$row = mysql_fetch_array($res, MYSQL_ASSOC);
							$i=1;
								while($cli = mysql_fetch_array($res1)){
									echo "<tr>";
									
									echo "<td align='center'>" .$i. "</td>";							
									echo "<td align='center'>" .$cli['client_code']. "</td>";
									echo "<td align='center'>" .$cli['client_name']. "</td>";
									echo "<td align='center'>" .$cli['client_comp']. "</td>";
							
									echo "<td align='center'><a href='client_view.php?view=$cli[client_id]'>View</a></td>";
									echo "<td align='center'><a href='client_delete.php?delete=$cli[client_id]'>Delete</a></td>";
							
									echo "</tr>";
								
								$i++;
								}
				?>
            </tr>
        </table>
	</div>
</body>
</html>