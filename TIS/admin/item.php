<?php
include('../inc/config.php');
include('../inc/connect.php');
	
	$sql = "SELECT * FROM item";
	$sql1 = "SELECT * FROM subitem";
	
	$res = mysql_query($sql) or die (mysql_error());
	$res1 = mysql_query($sql1) or die (mysql_error());
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
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
        		<li><a href="invoiceForm.php">Invoice</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            <table align="center" rules="all">
            		<tr>
                		<th>Item Id</th>
                    	<th>Item Name</th>
                	<tr>
                
                	<?php
						while($item = mysql_fetch_array($res)){
							
							echo "<tr>";
							
							echo "<td align='center'>" .$item['item_id']. "</td>";
							echo "<td align='center'>" .$item['item_name']. "</td>";
							
							echo "<td><a href='../func/itemdelete.php?delete=$item[item_id]'>delete</a></td>";
							
							echo "</tr>";
						
						}
					?>
                    
                    </tr>
                </table>
                <hr />
            	<hr />
            <table width="100%" rules="all" align="center">
                	<tr>
                    	<th>ID</th>
                        <th>Item Id</th>
                        <th>Sub Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                   	<tr>
                    
                    <?php
						$i=1;
						while($sub = mysql_fetch_array($res1)){
							
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$sub['item_id']. "</td>";
							echo "<td align='center'>" .$sub['sub_name']. "</td>";
							echo "<td align='center'>" .$sub['quantity']. "</td>";
							echo "<td align='center'>" .$sub['price']. "</td>";
							
							echo "<td><a href='../func/subdelete.php?delete=$sub[sub_id]'>delete</a></td>";
							
							echo "</tr>";
							
							$i++;
						
						}
					?>
                    
                    </tr>
                </table>
                <hr />
            	<hr />
            </div>
            <div>
            	<form action="../func/addItem.php" method="post">
                	<table align="center">
                        <tr>
                        	<td>Item Name</td>
                        	<td><input name="item_name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right"><span><input name="add" type="submit" value="add" /></span><span><input name="reset" type="reset" value="reset" /></span></td>
                        </tr>
                     </table>
                     </form>
                     <br />
             	<form action="../func/addSub.php" method="post">
                     <table align="center">
                     	<tr>
                        	<td>Item Id</td>
                        	<td>
                            	<select name="select">
                            		<option>----</option>
                                    <?php 
										require('../inc/connect.php');
										
										$sql = "SELECT * FROM item";
										$res = mysql_query($sql) or die (mysql_error());
										while($allitem = mysql_fetch_array($res)){
											?>
                                            <option id="<?php echo $allitem['item_id'];?>"><?php echo $allitem['item_id'] ?></option>
                                            <?php } ?>
                            	</select>
                              </td>
                        </tr>
                        <tr>
                        	<td>Sub Item</td>
                        	<td><input name="sub_name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Quantity</td>
                        	<td><input name="quantity" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Price</td>
                        	<td><input name="price" type="text" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right"><span><input name="add" type="submit" value="add" /></span><span><input name="reset" type="reset" value="reset" /></span></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>