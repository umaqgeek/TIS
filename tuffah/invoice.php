<?php
	include ('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tuffah Invoice System</title>
</head>

<body>
<div align="center">
  <div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="60%"><img src="<?php echo $companylogo; ?>" width="278" height="93" /><br />
    <?php echo $c_address; ?><br />
    <?php echo $c_phone; ?><br />
    <?php echo $c_fax; ?><br /></td>
    <td width="14%">&nbsp;</td>
    <td width="26%"><table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="2" align="center"><h1>INVOICE</h1></td>
  </tr>
  <tr>
    <td width="47%" align="left">DATE:</td>
    <td width="53%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="47%" align="left">INVOICE #</td>
    <td width="53%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="47%" align="left">Customer ID</td>
    <td width="53%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="47%" align="left">&nbsp;</td>
    <td width="53%" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="47%" align="left">DUE DATE:</td>
    <td width="53%" align="left">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td bgcolor="#99CC66"><font color="#FFFFFF">BILL TO</font></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>Nurul Fatin Nadia Bt Mohamad Sadon<br />
      Al Qanaah Resources Sdn Bhd<br />
    No6,Jln9/9,Perjiranan 9,Pasir Gudang Industrial Estate,81700 Pasir Gudang Johor<br />
    07-2511170</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>
</body>
</html>