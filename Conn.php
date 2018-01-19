<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
$conn=null;
    define("HOST","localhost");//CPU name
	define("NAME","root");//username
	define("PASS","");//password
	define("DBNAME","library");//Database name
    $conn = mysqli_connect(HOST,NAME,PASS,DBNAME) or die(mysqli_connect_error());     //Connect to the database
?>



