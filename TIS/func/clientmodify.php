<?php
include('../inc/config.php');
include('../inc/connect.php');
	if(isset($_GET['modify'])){
		$id= $_GET['modify'];
		$sql = "SELECT * FROM clients WHERE id = $id";
		$res = mysql_query($sql) or die (mysql_error());
		$client = mysql_fetch_array($res);
	}
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
                <li><a href="../admin/manage.php">Manage System</a></li>
        		<li><a href="../admin/invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
            <div>
            	<form action="clientmodify.php" method="post">
                	<table align="center">
                    	<th colspan="2">MODIFY CLIENT</th>
                    	<tr>
                        	<td>Client Name</td>
                        	<td><input name="client_name" type="text" size="40" value="<?php echo  $client['client_name']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Company Name</td>
                        	<td><input name="company_name" type="text" size="40" value="<?php echo  $client['company_name']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Address</td>
                        	<td><input name="address" type="text" size="40" value="<?php echo  $client['address']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Postcode</td>
                        	<td><input name="postcode" type="text" size="40" value="<?php echo  $client['postcode']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>state</td>
                        	<td><input name="state" type="text" size="40" value="<?php echo  $client['state']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Country</td>
                        	<td><input name="country" type="text" size="40" value="<?php echo  $client['country']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Phone</td>
                        	<td><input name="phone" type="text" size="40" value="<?php echo  $client['phone']; ?>" /></td>
                        </tr>
                         <tr>
                        	<td></td>
                        	<td><input name="id" type="hidden" size="40" value="<?php echo  $client['id']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="submit" type="submit" value="submit" /></td>
                        </tr>
                    </table>                 
                </form>
                <?php
					if(isset($_POST['submit'])){
						$sql = "UPDATE clients SET client_name = '$_POST[client_name]', company_name = '$_POST[company_name]',
								address = '$_POST[address]', postcode = '$_POST[postcode]', state = '$_POST[state]',
								country = '$_POST[country]', phone = '$_POST[phone]' WHERE id = $_POST[id]";
						$res = mysql_query($sql) or die (mysql_error());
						echo "success";
						header("Location:../admin/client.php");
					}
				?>
            </div>
        </div>
    </div>
</body>
</html>