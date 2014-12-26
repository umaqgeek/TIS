<?php 
	include('../inc/config.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Invoice</title>
</head>

<body>
	<div>
		<form action="" method="post">
   		  <table align="left">
            	<tr>
               	  <td>FROM <br />
                      <textarea name=""></textarea></td>
                </tr>
                <tr>
                	<td>TO <br />
                    	<textarea name=""></textarea></td>
                </tr>
            </table>
            
            <table width="291" align="right">
            	<tr>
               	  <td width="167">DATE <td width="156"><input name="" type="text" /></td>
                </tr>
                <tr>
               	  <td>INVOICE # <td><input name="" type="text" /></td>
                </tr>
                <tr>
               	  <td>CUSTOMER ID <td><input name="" type="text" /></td>
                </tr>
                <tr>
               	  <td>&nbsp;<td></td>
                </tr>
                <tr>
               	  <td>DUE DATE <td><input name="" type="text" /></td>
                </tr>
            </table>
            
            <table width="100%" border="1" bordercolor="#000000">
            	<tr>
                	<th>No</th>
                    <th>&radic;</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>price</th>
                </tr>
            </table>
    	</form>
    </div>
</body>
</html>