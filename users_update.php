<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php require("Conn.php");
$query="select * from tb_users where id=.$_GET['id']";
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
<h1>Modify user</h1>
<hr/>
<form class="form-style-8" action="users_do_update.php" method="post">
    <p>Name:<input type="text" name="uname" value="<?php echo $book['name']; ?>"></p>
	<p>gender:<input type="text" name="usax" value="<?php echo $book['sax']; ?>"></p>
	<p>age:<input type="text" name="uage" value="<?php echo $book['age']; ?>"></p>
	<p>class:<input type="text" name="uclass" value="<?php echo $book['class']; ?>"></p>
	<p>Borrowed books:<input type="text" name="bbname" value="<?php echo $book['bbname']; ?>"></p>
	<p>Use of books：<input type="text" name="bbuseto" value="<?php echo $book['bbuseto']; ?>"></p>
    <p>password:<input type="password" name="password" value="<?php echo $book['password']; ?>"></p>
    <p>confirm password:<input type="password" name="repassword" value="<?php echo $book['password']; ?>"></p>
    <p><input type="hidden" name="id" value="<?php echo $book['id']; ?>"></p>
    <p><input type="submit" name="submit" value="save"><input name="Submit2" type="button" class="btn_grey" value="return" onclick="history.back();"></p>
</form>
</center>