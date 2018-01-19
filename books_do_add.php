<?php
include ("include/header.php") ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $errors[] = array();
    $bn=$_POST['bname'];
    $bt=$_POST['btype'];
    $ba=$_POST['bauhtor'];
    $bc=$_POST['bcount'];
    $bi=$_POST['bid'];
    require ('Conn.php');
    $q="INSERT INTO tb_books (name,type,author,count,id)VALUES('$bn','$bt','$ba','$bc','$bi')";
    $result=mysqli_query($conn,$q);
    header('Location: books_look.php');
	
}
?>