

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<title></title>
</head>
<body>


<center>

<?php include ("include/header.php") ?>
<br><br>
<h1>ADD BOOK</h1>

<div class="form-row">
 <div class="form-group col-md-6">
<form action="books_do_add.php" method="post">
    <p>Title：<input  class="form-control" type="text" name="bname" value="<?php if(isset($_POST['bname'])) echo $_POST['bname']; ?>" required/></p>
    <p>Category：<input  class="form-control" type="text" name="btype" value="<?php if(isset($_POST['btype'])) echo $_POST['btype']; ?>" required/></p>
    <p>Quantity：<input  class="form-control" type="text" name="bcount" value="<?php if(isset($_POST['bcount'])) echo $_POST['bcount']; ?>" required/></p>
    <p>Author：<input  class="form-control" type="text" name="bauthor" value="<?php if(isset($_POST['bauthor'])) echo $_POST['bauthor']; ?>" required/></p>

    <p><input type="hidden" name="bid" value="<?php if(isset($_POST['bid'])) echo $_POST['bid']; ?>"></p><br>
    <p><br><input type="submit" name="submit" value="ADD"><br><input name="Submit2" type="button" class="btn_grey" value="BACK" onclick="history.back();"></p>
</form>
</div>
</div>
</center>

</body>
</html>