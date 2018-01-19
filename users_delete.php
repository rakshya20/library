<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
require("Conn.php");
$id = $_GET['id'];
$query = "delete from tb_users where id=".$id;
$result=mysqli_query($conn,$query);
if($result){
	echo "successfully deleted!</br/>";
	echo "<a href='users_look.php'>Back to continue browsing</a><br/>";
	echo "<a href='manager.php'>Return to Admin Center</a></br>";
	echo "<a href='index.php'>Return to home page</a><br/>";
}
?>