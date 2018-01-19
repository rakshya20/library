<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $bn=$_POST['bname'];
    $ba=$_POST['bauthor'];
    $bt=$_POST['btype'];
    $bc=$_POST['bcount'];
    $bi=$_POST['bid'];
	require("Conn.php");
    $query="update tb_books set name='$bn',author='$ba',type='$bt',count='$bc' where id='$bi'";
	$result=mysqli_query($conn,$query);
	if($result){
	echo "Successfully modified！";
	echo "<a href='books_look.php'>Back to continue browsing</a>";
	}
	else{
	echo "fail to edit！";
    echo "<a href='books_look.php'>return</a>";
	}
}
?>