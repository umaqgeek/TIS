<?php
include('../inc/config.php');
include('../inc/connect.php');
	
	$sql = "SELECT * FROM project";
	$res = mysql_query($sql) or die (mysql_error());
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
        		<li><a href="#"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
        		<li><a href="invoiceForm.php">Invoice</a></li>
                <li><a href="#">Profile</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<table width="63%" height="27" border="0" align="center" rules="all">
                	<tr>
                    	<th width="10%">ID</th>
                        <th width="39%">Project</th>
                        <th width="39%">Project Code</th>
                        <th width="12%">Warannty</th>
                    <tr>
                    <?php
						$i=1;
						while($pro = mysql_fetch_array($res)){
							echo "<tr>";
							
							echo "<td align='center'>" .$i. "</td>";
							echo "<td align='center'>" .$pro['project_name']. "</td>";
							echo "<td align='center'>" .$pro['project_code']. "</td>";
							echo "<td align='center'>" .$pro['warranty']. "</td>";
							
							echo "<td><a href='../func/projectmodify.php?modify=$pro[id]'>modify</a></td>";
							echo "<td><a href='../func/projectdelete.php?delete=$pro[id]'>delete</a></td>";
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
            	<form action="../func/addProject.php" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Project</td>
                        	<td><input name="project_name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Project Code</td>
                        	<td><input name="project_code" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Warranty</td>
                        	<td><input name="warranty" type="text" /></td>
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