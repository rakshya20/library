<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $un=$_POST['uname'];
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
    $q="INSERT INTO tb_users (name,password)VALUES('$un','$pw')";
	$result=mysqli_query($conn,$q);
	echo "Added successfully！<br/>";
	echo "<a href='users_add.php'>Back to continue adding</a><br/>";
	echo "<a href='users_look.php'>Back to browse users</a><br/>";
	echo "<a href='manager.php'>Return to Admin Center</a><br/>";
}?>