<?php
include("../inc/connect.php");
mysql_query("DELETE FROM users WHERE username='" .$id. "'") or die ("Error running MySQL query");
echo "Data Deleted!";
header('Location:../admin/staff.php');
//Closes specified connection
mysql_close($conn);
?>