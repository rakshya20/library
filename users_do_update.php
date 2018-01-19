<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $un=$_POST['uname'];	
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
    $q1="update tb_users set name='$un'where id='$id'";
	$q2="update tb_users set password='$pw' where id='$id'";
	$result1=mysqli_query($conn,$q1);
	$result2=mysqli_query($conn,$q2);
	if($result1 && $result2){
	echo "Successfully updated！";
	header('Location: users_look.php');
	}
	else	echo "fail to edit!";
    echo "<a href='users_look.php'>return</a>";
	}
?>
