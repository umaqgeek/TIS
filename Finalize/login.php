<?php 
	session_start();
	if(isset($_POST['login'])) {
		include 'inc/connect.php';
		$username = trim(addslashes($_POST['username']));
		$password = trim(addslashes($_POST['password']));
		
		if ($username != '' && $password != '') {
			$sql = "SELECT * FROM user
					WHERE username = '$username'
					AND password = '$password'";
			
			$result = mysql_query($sql) or die ('Query failed. ' . mysql_error());
			$row= mysql_fetch_array($result, MYSQL_ASSOC);
			
			if (mysql_num_rows($result) == 1) {
				$_SESSION['name']=$row['name'];
				$_SESSION['ic']=$row['ic'];
				$_SESSION['level']=$row['level'];
				
				if ($_SESSION['level'] == 'admin') {
					header("Location:admin/index.php");
					exit();
				}
				else {
					 header("Location:staff/index.php");
					 exit();
				}
			}
			else {
				header("Location:index.php");
				exit();
			}
		}
		else {
			header("Location:index.php");
			exit();
		}
	}
?>