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
        		<li><a href="../admin/invoice_create.php">Invoice</a></li>
                <li><a href="../admin/profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
        <div class="content">
            <div>
            	<form action="add_c.php" method="post">
                	<table width="310" border="2" align="center">
                    	    <th colspan="3">Fill Client Informations</th>
                    	<tr>
                        	<th width="131">Client Name</th>
                        	<td width="161"><input name="client_name" type="text" /></td>
                        </tr>
                    	<tr>
                        	<th>Company Name</th>
                        	<td><input name="company_name" type="text" /></td>
                        </tr>
                        <tr>
                        	<th>Address</th>
                        	<td><textarea name="address"></textarea></td>
                        </tr>
                        <tr>
                        	<th>Phone</th>
                        	<td><input name="phone" type="text" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="next" type="submit" value="Next" />
                            								<input type="hidden" name="client_id" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>