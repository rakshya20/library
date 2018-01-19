<?php session_start(); ?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Main</title>
</head>
<body>

	<title>Library Manager</title>
		<div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><h2>LIBRARY</h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                        <!-- <span class="sr-only">(current)</span> -->
                    <a class="nav-link" href="admin.php">ADMIN LOGIN</a>
                </li>            
            </ul>
        </div>
    </div>
    </nav>
</div>
		<form class="form-style-8" action="books_look.php" method="post">
			<p>
				<h3>Please Login to continue!</h3>
				<form>
				
				  <div class="form-row">
    				<div class="form-group col-md-6">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" name="username" class="form-control"  value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required/>				
				  </div>
				  </div>
				
				  <div class="form-row">
   					 <div class="form-group col-md-6">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control"   value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" required/>
				  </div>
				  </div>				  
				  <button type="submit" class="btn btn-primary">Login</button>
				  <span>OR, Register<a href="users_reg.php"> Here !</a></span>

				</form>

			</p>
		</form>

</body>
</html>	
