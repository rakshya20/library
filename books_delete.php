<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>


<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
require("Conn.php");
$id = $_GET['id'];
$query = "delete from tb_books where id=".$id;
$result=mysqli_query($conn,$query);
if($result){
	echo "successfully deleted！</br/>";
	echo "<a href='index.php'>Return to home page</a><br/>";
	echo "<a href='manager.php'>Return to Admin Center</a></br>";
    echo "<a href='books_look.php'>Back to continue browsing</a>";
}
?>

</body>
</html>

