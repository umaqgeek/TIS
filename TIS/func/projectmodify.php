<?php
include('../inc/config.php');
include('../inc/connect.php');
	if(isset($_GET['modify'])){
		$id= $_GET['modify'];
		$sql = "SELECT * FROM project WHERE id = $id";
		$res = mysql_query($sql) or die (mysql_error());
		$pro = mysql_fetch_array($res);
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
            	<form action="projectmodify.php" method="post">
                	<table align="center">
                    	<th colspan="2">MODIFY PROJECT</th>
                    	<tr>
                        	<td>Project Name</td>
                        	<td><input name="project_name" type="text" size="40" value="<?php echo  $pro['project_name']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Project Code</td>
                        	<td><input name="project_code" type="text" size="40" value="<?php echo  $pro['project_code']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Warranty</td>
                        	<td><input name="warranty" type="text" size="40" value="<?php echo  $pro['warranty']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td></td>
                        	<td><input name="id" type="hidden" size="40" value="<?php echo  $pro['id']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center"><input name="submit" type="submit" value="submit" /></td>
                        </tr>
                    </table>                 
                </form>
                <?php
					if(isset($_POST['submit'])){
						$sql = "UPDATE project SET
								project_name = '$_POST[project_name]',
								project_code = '$_POST[project_code]',
								warranty = '$_POST[warranty]' WHERE
								id = $_POST[id]";
								
						$res = mysql_query($sql) or die (mysql_error());
						echo "success";
						header("Location:../admin/project.php");
					}
				?>
            </div>
        </div>
    </div>
</body>
</html>