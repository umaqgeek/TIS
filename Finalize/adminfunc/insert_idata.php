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
            	<form action="add_idata.php" method="post">
                	<table width="265" border="2" align="center">
                    	      <th colspan="3">Fill Invoice Data</th>
                    	<tr>
                        	<th width="103">Client ID</th>
                        	<td width="144">
                            	<select name="client_id">
                                	<option value="0">select ID</option>
                                    	<?php
											$getCilentId = mysql_query("SELECT * FROM clients");
											while($viewAllId = mysql_fetch_array($getCilentId)){
										?>
                                   	<option value="<?php echo $viewAllId['client_id'] ?>"><?php echo $viewAllId['client_id'] ?></option>
                                    	<?php } ?>
                                </select>
                            </td>
                        </tr>
                    	<tr>
                        	<th>Project Code</th>
                        	<td>
                            	<select name="project_id">
                                	<option value="0">select ID</option>
                                    	<?php
											$getProjectId = mysql_query("SELECT * FROM project");
											while($viewAllId = mysql_fetch_array($getProjectId)){
										?>
                                   	<option value="<?php echo $viewAllId['project_id'] ?>"><?php echo $viewAllId['project_code'] ?></option>
                                    	<?php } ?>
                                </select>
                           	</td>
                        </tr>
                        <tr>
                        	<th>Date</th>
                        	<td><input name="date" type="date" /></td>
                        </tr>
                        <tr>
                        	<th>Due Date</th>
                        	<td><input name="due_date" type="date" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="next" type="submit" value="Next" />
                            								<input type="hidden" name="invoice_id" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>