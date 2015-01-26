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
	$textbox = 10;
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
                	<table align="center" width="62%" border="1">
                        <tr>
                        	<th width="73%">Description</th>
                            <th width="7%">Quantity</th>
                            <th width="20%">Price</th>
                        </tr>
                            
                        	<?php for($x = 1; $x <= $qty; $x++ ){ ?>   
                        	<tr>
                        		<td><input name="item_name[]" type="text" size="100" /></td>
                            <td><input name="quantity[]" type="text" size="6" maxlength="6" /></td>
                            <td><input name="price[]" type="text" size="6" maxlength="6" /></td>
                       		<?php } ?>
                            </tr>
                            <tr>
                            	<td colspan="3" bgcolor="#000000"></td>
                            </tr>
                            <tr >
                            	<td rowspan="3"><br />
                                	<table align="center" border="1">
                                    	<tr>
                                    		<th bgcolor="#00CC00">OTHERS COMMENTS</th>
                                        <tr>
                                        <tr>
                                        	<td>1. Total payment due in 7 days<br />
                                            	2. Please include the invoice number on your check</td>
                                        </tr>
                                    </table><br />
                                </td>
                            	<th align="right">Subtotal</th>
                                <td><input name="sbtotal" type="text" size="6" maxlength="10" /></td>
                            </tr>
                            <tr>
                            	<th align="right">GST</th>
                                <td align="center"><input name="gst" type="text" disabled="disabled" size="6" maxlength="10" value="-" /></td>
                            </tr>
                            <tr>
                            	<th align="right">Total Due</th>
                                <td><input name="total" type="text" size="6" maxlength="10" /></td>
                            </tr>
                            <tr>
                            	<td align="right" colspan="3"><p>Make all checks payable to<br />Tuffah Informatics</p></td>
                            </tr>
                            <tr>
                        	<td colspan="5" align="center"><input name="next" type="submit" value="Submit" />
                            								<input type="hidden" name="item_id" /></td>
                        </tr>
                    </table>     
                        </table>
                        <center>
                        <label>If you have any question about this invoice, please contact<br />Umar Mukhtar,019-9737579,umar@tuffah.info</label><br /><br />
                        <label><b>Thank You For Your Business!</b></label>
                      </center>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>