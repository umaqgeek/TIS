<?php
include('../inc/config.php');
include('../inc/connect.php');
	
	$sql = "SELECT * FROM item";
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
            <table align="center" border="1" width="100%">
            		<tr>
                		<th width="2%">No</th>
                        <th width="8%">Date</th>
                        <th width="8%">Invoice Code</th>
                        <th width="8%">Customer ID</th>
                        <th width="8%">due_date</th>
                        <th width="29%">Sender</th>
                        <th width="29%">receive</th>
                        <th width="8%">Total</th>
                	<tr>
                
                	<?php
						while($item = mysql_fetch_array($res)){
							
							echo "<tr>";
							
							echo "<td align='center'>" .$item['item_name']. "</td>";
							echo "<td align='center'>" .$item['quantity']. "</td>";
							echo "<td align='center'>" .$item['price']. "</td>";
							
							echo "<td><a href='../func/itemmodify.php?modify=$item[item_id]'>modify</a></td>";
							echo "<td><a href='../func/itemdelete.php?delete=$item[item_id]'>delete</a></td>";
							
							echo "</tr>";
						
						}
					?>
                    
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>