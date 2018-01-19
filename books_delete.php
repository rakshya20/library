<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>


<?php
require("Conn.php");
$id = $_GET['id'];
$query = "delete from tb_books where id=".$id;
$result=mysqli_query($conn,$query);
if($result){
	header('Location: books_look.php');
}
?>

</body>
</html>

