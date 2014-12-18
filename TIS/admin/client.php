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
        		<li><a href="invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<table width="100%" border="0" rules="all" align="center">
                	<tr>
                    	<th>ID</th>
                        <th>Client Name</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Postcode</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Phone</th>
                   	<tr>
                    
                    <?php
						$i=1;
						while($client = mysql_fetch_array($res)){
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$client['client_name']. "</td>";
							echo "<td align='center'>" .$client['company_name']. "</td>";
							echo "<td align='center'>" .$client['address']. "</td>";
							echo "<td align='center'>" .$client['postcode']. "</td>";
							echo "<td align='center'>" .$client['state']. "</td>";
							echo "<td align='center'>" .$client['country']. "</td>";
							echo "<td align='center'>" .$client['phone']. "</td>";
							
							echo "<td><a href='../func/clientmodify.php?modify=$client[id]'>modify</a></td>";
							echo "<td><a href='../func/clientdelete.php?delete=$client[id]'>delete</a></td>";
							
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
            	<form action="../func/addClient.php" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Client Name</td>
                        	<td><input name="client_name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Company Name</td>
                        	<td><input name="company_name" type="text" /></td>
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
                        	<td colspan="2" align="right"><span><input name="add" type="submit" value="add" /></span><span><input name="reset" type="reset" value="reset" /></span></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>