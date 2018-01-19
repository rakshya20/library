 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <?php header("Content-Type: text/html; charset=utf-8") ?>
<div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><h2>LIBRARY</h2></a>       
    </div>
    </nav>
</div>	
<center>
	<br>
	<br>
	<h1>Register Here !</h1>
	<hr/>
	<table>
		<form class="form-style-8" action="users_do_reg.php" method="post">
			<tr><td>Userame：</td><td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>" required/></td></tr>
			<tr><td>password：</td><td><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"></td></tr>
			<tr><td>confirm password：</td><td><input type="password" name="repassword" value="<?php if(isset($_POST['repassword'])) echo $_POST['repassword']; ?>" required/></td></tr>
			<p><input type="hidden" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id']; ?>"></p>
			<tr><td><input type="submit" name="submit" value="REGISTER"></td></tr>
		</form>
	</table>
</center>