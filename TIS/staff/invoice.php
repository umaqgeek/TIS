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
<title><?php echo $companyname; ?>-Invoice</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
<div class="main">
    	<div class="navbar"> 
    		<ul id="menu">
        		<li><a href=""><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="#">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
            <hr />
            	<center><b><h4><?php echo $name?> | <?php echo $ic ?></h4></b></center>
            <hr />
            
        <div class="content">
        	<div align="center">
    			<form action="../function/clientadd.php" method="post">
                	<table align="center">
                    	<tr>
                        	<td align="center" colspan="2"><h1>First Step</h1>
                            								Fill The Information</td>
                        </tr>
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
                        	<td>Phone</td>
                            <td><input name="phone" type="text" /></td>
                        </tr>
                    </table>
                    <input name="submit" type="submit" value="Next" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>