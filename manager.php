<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$mn=$_POST['managername'];
		$mpw=$_POST['mpassword'];
		if($mn != "manager" || $mpw != "000")
			echo "wrong user name or password！";
	}
?>

<html>


	<title>Library Manager</title>
	<?php
	include ("include/header.php") ?>
	
	
</html>