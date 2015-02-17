<?php
	$qty = 25;
	if (isset($_REQUEST['qty'])){
		$qty = $_POST['qty'];
	}

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
	
	$id = $_REQUEST['id'];
	$sql1 = "SELECT * FROM invoice INNER JOIN client
			ON invoice.inv_id = client.client_id
			WHERE invoice.inv_id = '$id'";
	$res1 = mysql_query($sql1) or die (mysql_error());
	$inv = mysql_fetch_array($res1, MYSQL_ASSOC);
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
            	<form action="i_desc.php" method="post">
                	<fieldset style="width:50%">
                    	<table align="left" width="40%">
                      		<tr>
                        		<td><img src="../img/logo.png" width="227" height="66" /><br />
                            		<?php echo $c_address ?><br />
                                	<?php echo $c_phone ?><br />
                                	<?php echo $c_fax ?></td>
                        	</tr>
                        	<tr>
                        		<td bgcolor="#009900"><font color="#FFFFFF">BILL TO</font></td>
                        	</tr>
                        	<tr>
                        		<td><?php echo $inv['client_name']; ?><br />
                            		<?php echo $inv['client_comp']; ?><br />
                                	<?php echo $inv['comp_address']; ?><br />
                                	<?php echo $inv['comp_phone']; ?><br /></td>
                        	</tr>
                      	</table>
                      	<table align="right" width="30%">
                      		<th colspan="3"><h2><font color="#009900">INVOICE</font></h2></th>
                      		<tr>
                        		<td>DATE :</td>
                                <td></td>
                                <td><?php echo $inv['inv_date']; ?></td>
                            </tr>
                            <tr>
                            	<td>INVOICE #</td>
                                <td></td>
                                <td><?php echo $inv['inv_code']; ?></td>
                            </tr>
                            <tr>
                               	<td>Customer ID</td>
                                <td></td>
                                <td><?php echo $inv['client_code']; ?></td>
                            </tr>
                            <tr>
                            	<td>Due Date</td>
                                <td></td>
                                <td><?php echo $inv['inv_due']; ?></td>
                        	</tr>
                      	</table>
                        <table align="center" width="62%" border="1">
                        <tr>
                        	<th width="73%">Description</th>
                            <th width="7%">Quantity</th>
                            <th width="20%">Price</th>
                            <th width="20%">Total</th>
                        </tr>
                            
                        	<?php for($x = 1; $x <= $qty; $x++ ){ ?>   
                        	<tr>
                        		<td><input name="item_name[]" type="text" size="70" /></td>
                            	<td><input name="item_quantity[]" type="text" size="6" maxlength="6" /></td>
                            	<td><input name="item_price[]" type="text" size="6" maxlength="6" /></td>
                                <td><input name="item_total[]" type="text" size="6" maxlength="6" /></td>
                       		<?php } ?>
                            
                            </tr>
                            <tr>
                            	<td colspan="2" rowspan="3">
                                	<center>
                                    	<table>
                                        	<tr>
                                            	<td bgcolor="#009900"><font color="#FFFFFF">OTHER COMMENTS</font></td>
                                            </tr>
                                            <tr>
                                            	<td>1. Total Payments due in 7 days<br />
                                                	2.Please include the invoice number on your checks</td>
                                            </tr>
                                        </table>
                                    </center></td>
                                <td>TOTAL</td>
                                <td><input name="total" type="text" size="6" maxlength="6" /></td>
                            </tr>
                            <tr>
                        	<td colspan="5" align="center"><input name="next" type="submit" value="Submit" />
                            								<input type="hidden" name="item_id" /></td>
                        </tr>
                    </table>     
                        <center>
                        <label>If you have any question about this invoice, please contact<br />Umar Mukhtar,019-9737579,umar@tuffah.info</label><br /><br />
                        <label><b>Thank You For Your Business!</b></label>
                      </center>
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