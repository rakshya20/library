<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php require("Conn.php");
$query="select * from tb_users where id=".$_GET['id'];
$result=mysqli_query($conn,$query);
if($result && mysqli_num_rows($result)>0){
	$book = mysqli_fetch_assoc($result);
}
else{
	die("Did not find the data to be modified!");
}
?>
<center>
<title>library manager</title>
<h1>Update Information</h1>
<hr/>
<form class="form-style-8" action="users_do_update.php" method="post">
    <p>Name:<input type="text" name="uname" value="<?php echo $book['name']; ?>"></p>	
    <p>password:<input type="password" name="password" value="<?php echo $book['password']; ?>"></p>
    <p>confirm password:<input type="password" name="repassword" value="<?php echo $book['password']; ?>"></p>
    <p><input type="hidden" name="id" value="<?php echo $book['id']; ?>"></p>
    <p><input type="submit" name="submit" value="save"><input name="Submit2" type="button" class="btn_grey" value="return" onclick="history.back();"></p>
</form>
</center>