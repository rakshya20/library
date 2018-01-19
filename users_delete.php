<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php
require("Conn.php");
$id = $_GET['id'];
$query = "delete from tb_users where id=".$id;
$result=mysqli_query($conn,$query);
if($result){
	header('Location: users_look.php');
}
?>