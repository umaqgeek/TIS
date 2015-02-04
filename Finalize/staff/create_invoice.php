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
        		<li><a href="create_invoice.php">Create Invoice</a></li>
                <li><a href="profile.php">Profile</a></li>
        		<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
        <br /><br />
        <div>
        	<center>
        		<form action="i_data.php" method="post">
               	  <fieldset style="width:30%">
                    	<legend>Create Invoice</legend><br />
                        
                        	<label><b>Invoice Code</b></label><br />
                            	<input type="text" name="inv_code" /><br /><br />
                                
                        	<label><b>Client</b></label><br />
                            	<select name="client_id">
                                	<option>--Client--</option>
                                    	<?php
											$getCilentId = mysql_query("SELECT * FROM client");
											while($viewAllId = mysql_fetch_array($getCilentId)){
										?>
                                        <option value="<?php echo $viewAllId['client_id'] ?>"><?php echo $viewAllId['client_code'] ?></option>
                                    	<?php } ?>
                                </select>
                                <br />
                    			<a href="c_add.php">New Client</a><br /><br />
                                
                                <label><b>Project</b></label><br />
                            	<select name="pro_id">
                                	<option>--Project--</option>
                                    	<?php
											$getProId = mysql_query("SELECT * FROM project");
											while($viewAllId = mysql_fetch_array($getProId)){
										?>
                                        <option value="<?php echo $viewAllId['pro_id'] ?>"><?php echo $viewAllId['pro_code'] ?></option>
                                    	<?php } ?>
                                </select><br />
                                <a href="p_add.php">New Project</a><br /><br />
                                
                                <label><b>Date</b></label><br />
                                	<input type="date" name="inv_date" /><br />
                                    
                                <label><b>Due Date</b></label><br />
                               		<input type="date" name="inv_due" /><br /><br />
                               	<label><b>Quantity Item</b></label><br />
                                	<input type="text" name="qty" id="qty" /><br /><br />
                                
                                <input type="submit" name="submit" value="Next" />
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