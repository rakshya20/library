<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $un=$_POST['uname'];
	$us=$_POST['usax'];
	$ua=$_POST['uage'];
	$uc=$_POST['uclass'];
	$ubbn=$_POST['bbname'];
	$ubbu=$_POST['bbuseto'];
    $pw=$_POST['password'];
    $rpw=$_POST['repassword'];
	$id=$_POST['id'];
    require ('Conn.php');
    $q1="update tb_users set name='$un',sax='$us',age='$ua',class='$uc' where id='$id'";
	$q2="update tb_users set bbname='$ubbn',bbuseto='$ubbu',password='$pw' where id='$id'";
	$result1=mysqli_query($conn,$q1);
	$result2=mysqli_query($conn,$q2);
	if($result1 && $result2){
	echo "Successfully modified！";
	echo "<a href='users_look.php'>Back to continue browsing</a>";
	}
	else	echo "fail to edit!";
    echo "<a href='users_look.php'>return</a>";
	}
}?>
