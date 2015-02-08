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
        	<div>
           	<center>
            	<form action="register.php" method="post">
                	<fieldset style="width:20%">
                    	<legend>New Staff</legend><br />
                        
                        	<label><b>Username</b></label><br />
                            	<input type="text" name="username" /><br />
                                
                            <label><b>Password</b></label><br />
                            	<input type="password" name="password" /><br />
                                
                            <label><b>Name</b></label><br />
                            	<input type="text" name="name" /><br />
                                
                            <label><b>No Ic</b></label><br />
                            	<input type="text" name="ic" /><br />
                                
                            <label><b>Position</b></label><br />
                            	<input type="text" name="position" /><br />
                                
                            <label><b>Level</b></label><br />
                            	<input type="text" name="level" /><br /><br />
                                
                           	<input type="submit" name="submit" value="Submit" />
                    </fieldset>
                </form>
            </center>
       	</div>
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
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$ic = $_POST['ic'];
		$position = $_POST['position'];
		$level = $_POST['level'];

		mysql_query("INSERT INTO user (username, password, name, ic, position,  level) VALUES('$username', '$password', '$name', '$ic', '$position', '$level')") or die ("Error inserting data into table");
	
		echo "success";
		header("Location:user_list.php");
	
		//Closes specified connection
		mysql_close($conn);
	}
?>