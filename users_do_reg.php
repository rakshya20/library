
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $un=$_POST['uname'];
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
	$qname="SELECT name FROM tb_users WHERE name='$un'";
	$r1=mysqli_query($conn,$qname);
	$info=mysqli_fetch_assoc($r1);
		if($info){
		echo "Username already exists！";
		echo "<br/><a href='index.php'>Return to home page</a>";
		echo "<br/><a href='users_reg.php'>Back to re-enter</a>";
	}
	else{
		$q="INSERT INTO tb_users (name,password)VALUES('$un','$pw')";
		$result=mysqli_query($conn,$q);
		echo "registration success！";
		echo "<br/><a href='index.php'>Return to home page</a>";
		echo "<br/><a href='users.php'>Into the personal center</a>";
	}
}
?>