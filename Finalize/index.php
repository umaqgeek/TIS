<?php 
include ('inc/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $companyname; ?> - Log In</title>
</head>

<body>
	<div>
    	<div align="center"><img src="img/login logo.png" /><br /><br />
    		<h1>Welcome to <?php echo $companyname; ?> Invoice System</h1>
        </div>
        	<br />
        <div align="center">
			<center>
            	<fieldset style="width:20%">
					<h1>Login Here</h1>
						<form method="post" action="login.php">
							Username<br />
								<input type="text" name="username" /><br />
							Password<br />
								<input type="password" name="password" /><br /><br />
								<input id="button" type="submit" name="login" value="Login" />
    					</form>
    			</fieldset>
         	</center>
		</div>
    </div>
</body>
</html>