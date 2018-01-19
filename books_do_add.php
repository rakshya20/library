<?php header("Content-Type: text/html; charset=utf-8")
include ("include/header.php") ?> ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $bn=$_POST['bname'];
    $bt=$_POST['btype'];
    $bc=$_POST['bcount'];
    $bi=$_POST['bid'];
    require ('Conn.php');
    $q="INSERT INTO tb_books (name,type,count,id)VALUES('$bn','$bt','$bc','$bi')";
    $result=mysqli_query($conn,$q);
	echo "Added successfully！<br/>";
	echo "<a href='books_add.php'>Back to continue adding</a><br/>";
	echo "<a href='books_look.php'>Back to browse the book</a><br/>";
	echo "<a href='manager.php'>Return to Admin Center</a><br/>";
}?>