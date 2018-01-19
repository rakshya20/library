<?php header("Content-Type: text/html; charset=utf-8") ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>


<center>

<?php include ("include/header.php") ?>
<h1>Add book information</h1>
<hr/>
<form action="books_do_add.php" method="post">
    <p>Title：<input type="text" name="bname" value="<?php if(isset($_POST['bname'])) echo $_POST['bname']; ?>"></p>
    <p>Category：<input type="text" name="btype" value="<?php if(isset($_POST['btype'])) echo $_POST['btype']; ?>"></p>
    <p>Quantity：<input type="text" name="bcount" value="<?php if(isset($_POST['bcount'])) echo $_POST['bcount']; ?>"></p>
    <p>Author：<input type="text" name="bauthor" value="<?php if(isset($_POST['bauthor'])) echo $_POST['bauthor']; ?>"></p>
    <p><input type="hidden" name="bid" value="<?php if(isset($_POST['bid'])) echo $_POST['bid']; ?>"></p>
    <p><input type="submit" name="submit" value="save"><input name="Submit2" type="button" class="btn_grey" value="return" onclick="history.back();"></p>
</form>
</center>

</body>
</html>