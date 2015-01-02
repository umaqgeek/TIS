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
        		<li><a href="../adminfunc/client_insert.php">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
            
        <div class="content">
        	<div align="center">
    			<h1>Welcome to <?php echo $companyname; ?> Invoice System</h1>
                <table width="524" align="center">
                	<tr>
                		<th><a href="users.php"><img src="../img/images.png" width="130" height="130" /></a><br />
                        Users</th>
                        <th><a href="client.php"><img src="../img/download (4).jpg" width="130" height="130" /></a><br />
                        Client</th>
                	</tr>
               	</table>
                <br />
                <br />
                <table width="694" align="center">
                	<tr>
                    	<th><a href="project.php"><img src="../img/download.jpg" width="130" height="130" /></a><br />
                        Project</th>
                        <th><a href="invoice.php"><img src="../img/invoice icon.png" width="130" height="130" /></a><br />
                        Invoice</th>
                        <th><a href="#"><img src="../img/download (3).jpg" width="130" height="130" /></a><br />
                        Item</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>