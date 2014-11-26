<?php
include("config.php");

mysql_connect("$host", "$user","$pass");
mysql_select_db($db);
session_start();
?>
