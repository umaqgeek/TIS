<?php
	include ('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tuffah Invoice System</title>
<link rel="stylesheet" type="text/css" href="css/nav-style.css" />
</head>

<body>
<div align="center" class="main">
  <?php include("temp_nav.php"); ?><br /><br />
<div>
  	<form action="" method="post">
    	<table width="424">
        	<tr>
            	<td width="203"><img src="<?php echo $companylogo; ?>" width="180" height="63" /><br />
                	<?php echo $c_address; ?><br />
                	Phone:<?php echo $c_phone; ?><br />
                	Fax:<?php echo $c_fax; ?><br /></td>
                <td width="10">&nbsp;</td>
                <td width="204">
                	<table width="202" height="80">
                    	<tr>
                       	  <td colspan="2"><strong><h1>INVOICE</h1></strong></td>
                        </tr>
                        <tr>
                          <td width="108">DATE :<br />
                          	INVOICE #<br />
                            Customer ID<br /><br />
                            Due Date</td>
                          <td width="60"><input name="" type="text" size="10" /><br />
                            <input name="" type="text" size="10" /><br />
                            <input name="" type="text" size="10" /><br /><br />
                            <input name="" type="text" size="10" /></td>
                        </tr>
                    </table>
            </tr>
            <tr>
            	<td bgcolor="#009966"><font color="#FFFFFF">BILL TO</font></td>
        </table>
  </form>
</div>
</body>
</html>