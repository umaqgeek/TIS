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
	
	$sql1 = "SELECT * FROM clients";
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
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="invoice.php">Invoice</a></li>
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
                    	<th colspan="13">CLIENT</th>
                    </tr>
                	<tr>
                    	<th>No</th>
                        <th>Client ID</th>
                        <th>Client Name</th>
                        <th>Company Name</th>
                        <th>Action</th>
                   	<tr>
                    
                    <?php
						$i=1;
						while($client = mysql_fetch_array($res1)){
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$client['client_id']. "</td>";
							echo "<td align='center'>" .$client['client_name']. "</td>";
							echo "<td align='center'>" .$client['company_name']. "</td>";
							
							echo "<td align='center'><a href='../adminfunc/clientview.php?view=$client[client_id]'>View</a></td>";
							
							echo "</tr>";
							
							$i++;
						}
					?>
                    
                    </tr>
                </table>
                <hr />
            </div>
        </div>
    </div>
</body>
</html>