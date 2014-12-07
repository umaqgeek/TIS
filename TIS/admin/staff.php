<?php include('../inc/config.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Staff</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" />
</head>

<body>
<body>
	<div class="main">
    	<div class="navbar">
    		<ul id="menu">
        		<li><a href="index.php"><img src="../img/login logo.png" width="180" height="60" /></a></li>
                <li><a href="manage.php">Manage System</a></li>
        		<li><a href="#">Invoice</a></li>
        		<li><a href="#">Contact Us</a></li>
        		<li><a href="#">Logout</a></li>
			</ul>
		</div>
        	<br /><br /><br />
        <div class="content">
        	<div>
            	<table width="1015" border="0" rules="all" align="center">
                	<tr>
                    	<td width="16">ID</td>
                        <td width="64">Username</td>
                        <td width="60">Password</td>
                        <td width="180">Name</td>
                        <td width="136">IC</td>
                        <td width="207">Address</td>
                        <td width="57">Postcode</td>
                        <td width="83">State</td>
                        <td width="51">County</td>
                        <td width="80">Phone</td>
                        <td width="35">Level</td>
                    </tr>
                    <tr>
                    	<td height="42">1</td>
                        <td>kamarul94</td>
                        <td>marul94</td>
                        <td>kamalrul bin rizam</td>
                        <td>941020-01-5897</td>
                        <td>MLO 2800 KAMPUNG MELAYU SEDENAK</td>
                        <td>81010</td>
                        <td>KULAIJAYA</td>
                        <td>JOHOR</td>
                        <td>0177499736</td>
                        <td>staff</td>
                    </tr>
                </table>
            	<hr />
            </div>
            <div>
            	<form action="" method="post">
                	<table align="center">
                    	<tr>
                        	<td>Username</td>
                        	<td><input name="username" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                        	<td><input name="password" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Name</td>
                        	<td><input name="name" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>IC</td>
                        	<td><input name="ic" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Address</td>
                        	<td><input name="addr" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Postcode</td>
                        	<td><input name="postcode" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>state</td>
                        	<td><input name="state" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Country</td>
                        	<td><input name="country" type="text" /></td>
                        </tr>
                        <tr>
                        	<td>Level</td>
                        	<td><input name="level" type="text" /></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="right"><input name="add" type="button" value="add" /><input name="reset" type="button" value="reset" /></td>
                        </tr>
                    </table>                 
                </form>
            </div>
        </div>
    </div>
</body>
</html>