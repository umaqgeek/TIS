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
<title><?php echo $companyname; ?>-Home</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
        		<li><a href="invoice_create.php">Invoice</a></li>
                <li><a href="profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
            
        <div class="content">
        	<div align="center">
    			<h1>CREATE INVOICE</h1>
                <form action="../adminfunc/insert_c.php" method="post">
               		<table align="center">
                		<tr>
                    		<td>
               					<center><h2>USER MANUAL</h2></center>
                    		</td>
                      	</tr>
                   		<tr>
                        	<td>
                    			<h3>1. Add a Client Information</h3>
                    			<h3>2. Add a Project Type</h3>
                    			<h3>3. Add a Invoice Data</h3>
                    			<h3>4. Add a Item Description</h3>
                        	</td>
                   		</tr>
                	</table>
                <input name="start" type="submit" value="Create" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>