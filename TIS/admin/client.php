<?php
include('../inc/config.php');
include('../inc/connect.php');
	
	$sql = "SELECT * FROM clients";
	$res = mysql_query($sql) or die (mysql_error());
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
        	<div>
            	<table width="100%" border="1" align="center">
                	<tr>
                    	<th>ID</th>
                        <th>Customer ID</th>
                        <th>Client Name</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                   	<tr>
                    
                    <?php
						$i=1;
						while($client = mysql_fetch_array($res)){
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$client['customer_id']. "</td";
							echo "<td align='center'>" .$client['client_name']. "</td>";
							echo "<td align='center'>" .$client['company_name']. "</td>";
							echo "<td align='center'>" .$client['address']. "</td>";
							echo "<td align='center'>" .$client['phone']. "</td>";
							
							echo "<td><a href='../func/cliView.php?modify=$client[client_id]'>View</a></td>";
							echo "<td><a href='../func/cliDelete.php?delete=$client[client_id]'>Delete</a></td>";
							
							echo "</tr>";
							
							$i++;
						}
					?>
                    
                    </tr>
                </table>
                <hr />
            	<hr />
            </div>
        </div>
    </div>
</body>
</html>