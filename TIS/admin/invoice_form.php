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
	//session
	$name = $_SESSION['name'];
	$sql = "SELECT * FROM users WHERE name = '$name'";
	$res = mysql_query($sql) or die('Query failed. ' . mysql_error());
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	
	$name = $row['name'];
	$ic = $row['ic']; 
	
	//calling data
	$sql1 = "SELECT * FROM clients";
	$res1 = mysql_query($sql1) or die('Query failed. ' . mysql_error());
	$cli = mysql_fetch_array($res1, MYSQL_ASSOC);
	
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
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
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
        	<div align="center">
            	<h1 align="center">INVOICE</h1>
                <br />
              <form action="" method="post" style="width:70%">
       			<table align="left">
            			<tr>
                			<td><img src="../img/login logo.png" width="166" height="59" /><br />
                            	<?php echo $c_address ?><br />
                                <?php echo $c_address1 ?><br />
                                <?php echo $c_address2 ?><br />
                                <?php echo $c_phone ?><br />
                                <?php echo $c_fax ?>
               			  </td>
                		</tr>
                		<tr>
                			<td bgcolor="#33CC33">BILL TO</td>
                		</tr>
                        <tr>
                			<td><?php echo $cli['client_name'] ?><br />
                            	<?php echo $cli['company_name'] ?><br />
                                <?php echo $cli['address'] ?><br />
                                <?php echo $cli['phone'] ?>
                          </td>
                		</tr>
                        <tr>
                        	<td>
                            	<table>
                        			
            					</table>
                            </td>
                        </tr>
               	  </table>
            		<table align="right">
            			<tr>
                			<td>Date</td>
                            <td>:</td>
                    		<td><input name="date" type="date" value="" /></td>
                		</tr>
                		<tr>
                			<td>INVOICE #</td>
                            <td>:</td>
                    		<td><input name="invoice_code" type="text" value="" size="10" /></td>
                		</tr>
                        <tr>
                			<td>Customer ID</td>
                            <td>:</td>
                    		<td><?php echo $cli['client_id'] ?></td>
                		</tr>
                        <tr>
                			<td>Due Date</td>
                            <td>:</td>
                    		<td><input name="due_date" type="date" value="" /></td>
                		</tr>
                        <tr>
                			<td>Project Code</td>
                            <td>:</td>
                    		<td><input name="project_code" type="text" value="" size="10" /></td>
                		</tr>
                        <tr>
                			<td>Project Name</td>
                            <td>:</td>
                    		<td><input name="project_name" type="text" value="" size="10" /></td>
                		</tr>
            		</table>
                    <br />
					<table align="center" width="100%" border="1">
                		<tr>
                    		<th width="6%">No</th>
                        	<th width="85%">Description</th>
                        	<th width="6%">Quantity</th>
                        	<th width="3%">Price</th>
                    	<tr>
                    	
                        <?php
						
							
						
						?>
                	</table>
                    <br />
                    <input name="submit" type="submit" value="Submit" />
			  </form>
			</div>
		</div>
	</div>
</body>
</html>