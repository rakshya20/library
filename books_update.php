<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php require("Conn.php");
	$query="select * from tb_books where id=".$_GET['id'];
	$result=mysqli_query($conn,$query);
	if($result && mysqli_num_rows($result)>0){
		$book = mysqli_fetch_assoc($result);
	}

	else{
		die("Did not find the data to be modified！");
	}
?>
<center><h1>LIBRARY</h1></center>
<center>
<title>Library Manager</title>
<h1>Update books</h1>
<hr/>
<form class="form-style-8" action="books_do_update.php" method="post">
    <p>Title：<input type="text" name="bname" value="<?php echo $book['name']; ?>"></p>
    <p>Author：<input type="text" name="bauthor" value="<?php echo $book['author']; ?>"></p>
    <p>Type：<input type="text" name="btype" value="<?php echo $book['type']; ?>"></p>
    <p>Quantity：<input type="text" name="bcount" value="<?php echo $book['count']; ?>"></p>
    <p><input type="hidden" name="bid" value="<?php echo $book['id']; ?>"></p>
    <p><input type="submit" name="submit" value="save"><input name="Submit2" type="button" class="btn_grey" value="return" onclick="history.back();"></p>
</form>
</center>