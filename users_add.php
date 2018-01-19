<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php header("Content-Type: text/html; charset=utf-8") ?>
<center>
<title>library manager</title>
<h1>Add user</h1>
<hr/>
<form class="form-style-8"  action="users_do_add.php" method="post">
    <p>Name:<input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></p>
    <p>password：<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></p>
    <p>confirm password：<input type="password" name="repassword" value="<?php if(isset($_POST['repassword'])) echo $_POST['repassword']; ?>"></p>
    <p><input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>"></p>
    <p><input type="submit" name="submit" value="save"><input name="Submit2" type="button" class="btn_grey" value="return" onclick="history.back();"></p>
</form>
</center>