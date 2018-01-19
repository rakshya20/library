<?php session_start(); ?>
<?php header("Content-Type: text/html; charset=utf-8") ?>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Library Manager</title>
		<center><h1><img src="img/5.jpg" alt="logo" height="40" width="40">WELCOME!</h1></center>		
		<hr/>
		<div class="admin"><h4><a class="btn btn-primary" href="admin.php">Admin Here</a></h4></div>
		<form class="form-style-8" action="users_do_login.php" method="post">
			<p>
				<h3>Please Login !</h3>
				<form>
				
				  <div class="form-row">
    				<div class="form-group col-md-6">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" name="username" class="form-control"  value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">				
				  </div>
				  </div>
				
				  <div class="form-row">
   					 <div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control"   value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
				  </div>
				  </div>				  
				  <button type="submit" class="btn btn-primary">Login</button>
				  <span><a href="users_reg.php">Register Here</a></span>

				</form>

			</p>
		</form>			
</html>