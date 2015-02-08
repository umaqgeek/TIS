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
           	<center>
            	<form action="p_add.php" method="post">
                	<fieldset style="width:20%">
                    	<legend>New Client</legend><br />
                    		<label><b>Project Code</b></label><br />
                            	<input type="text" name="pro_code" /><br />
                                
                            <label><b>Project Name</b></label><br />
                            	<input type="text" name="pro_name" /><br />
                                
                   	  		<label><b>Project Warranty</b></label><br />
                   	  			<input type="text" name="pro_warranty" /><br />
                                
                           	<input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
            </center>
       	</div>
        <br />
        <div>
        	<footer align="center">
            	<p><b>All Rights Reserved</b> &copy; Tuffah Informatics</p>
                <p><b><?php echo $name ?> || <?php echo $ic ?></b></p>
            </footer>
        </div>
    </div>
</body>
</html>
<?php 
	if(isset($_POST['submit'])){
		
		$pro_code = $_POST['pro_code'];
		$pro_name = $_POST['pro_name'];
		$pro_warranty = $_POST['pro_warranty'];
		
		$sql1 = mysql_query("INSERT INTO project(pro_code, pro_name,
							pro_warranty)
							values ('$pro_code', '$pro_name',
							'$pro_warranty')");
		
		header("Location:create_invoice.php");
	}
?>