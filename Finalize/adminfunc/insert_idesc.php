<?php
$invoice_id = 0;
if (isset($_GET['id'])) {
	$invoice_id = $_GET['id'];
}

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
            	<form action="add_idesc.php" method="post">
                <input type="hidden" value="<?php echo $invoice_id; ?>" name="invoice_id" />
                	<table width="300" border="2" align="center">
                    	  <th colspan="5">Fill Item Description</th>
                    	<tr>
                        	<th width="158">Description</th>
                        	<th width="58">Quantity</th>
                        	<th width="34">Price</th>
                            
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>
                            
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>
                        
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>
                        
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>
                        
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>
                        
                        <tr>
                        	<td><input name="item_name" type="text" size="100" /></td>
                            <td><input name="quantity" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price" type="text" size="6" maxlength="6" /></td>                        
                        <tr>
                        	<td colspan="5" align="center"><input name="next" type="submit" value="Submit" />
                            								<input type="hidden" name="item_id" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>