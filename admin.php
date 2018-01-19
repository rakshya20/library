<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
<div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><h2>LIBRARY</h2></a>       
    </div>
    </nav>
</div>
<!-- 	<p><center><h1><a href="index.php">LIBRARY</h1></center>	 -->	
		<hr/>
				
	<form class="form-style-8"  action="manager_login.php" method="post">
			<h3>Admin login</h3>
				<table>
					<tr>
						<td>username：</td>
						<td><input type="text" name="managername" required/></td>
					</tr>
					<tr>
						<td>password：</td>
						<td><input type="password" name="mpassword" required/></td>
					</tr>
					<tr>
						<td><input type="submit" value="LOGIN"></td>						
					</tr>
				</table>
			</p>
	</form>

</body>
</html>
