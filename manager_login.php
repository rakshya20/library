<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$mn=$_POST['managername'];
	$mpw=$_POST['mpassword'];
	if($mn != "manager" || $mpw != "000"){
		header("location: admin.php");
		
	}
	else{
		header("location: manager.php");
	}
}
?>