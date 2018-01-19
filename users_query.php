<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

	if(@$un=$_POST['uname'])
		$query = "select * from tb_users where name='$un'";
	if(@$us=$_POST['usex'])
		$query = "select * from tb_users where sax='$us'"; 
	if(@$uc=$_POST['uclass'])
		$query = "select * from tb_users where class='$uc'";
	@$result = mysqli_query($conn,$query);
	if(!$result)
		echo "Search content does not exist！";
}
?>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>library manager</title>
	<center>
		<h1>Search for users</h1>
		<hr/>
		<a href='index.php'>Return to home page</a>&nbsp;&nbsp;&nbsp;
		<a href='manager.php'>Return to Admin Center</a>
		<form class="form-style-8"  action="users_query.php" method="post">
		<table>
			<tr><td>Find by username：</td><td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></td><td><input type="submit" name="submit" value="search for"></td></tr>
		</table>
		</form>
		<form class="form-style-8" action="users_query.php" method="post">
		<table>
			<tr><td>Find by sex:</td><td><input type="text" name="usex" value="<?php if(isset($_POST['usex'])) echo $_POST['usex']; ?>"></td><td><input type="submit" name="submit" value="search for"></td></tr>
		</table>
		</form>
		<form action="users_query.php" method="post">
		<table>
			<tr><td>Find by class：</td><td><input type="text" name="uclass" value="<?php if(isset($_POST['uclass'])) echo $_POST['uclass']; ?>"></td><td><input type="submit" name="submit" value="search for"></td></tr>
		</table>
		</form>

		<div class="container">
			<h2>Browse Users</h2>
		<table class="table table-hover">
    	<thead>
      	<tr>
				<th>S no.</th>
				<th>Users</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Class</th>
				<th>No. of books borrowed</th>
				<th>Use of Books</th>
				<th>Borrowed time</th>

				<th align="center">OPERATION</th>
			</tr>
    	</thead>
    	<?php 
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['bbname']."</td>";
				echo "<td>".$row['bbuseto']."</td>";
				echo "<td>".$row['bbtime']."</td>";				
				echo "<td align='center'>";
				echo "<a href='users_update.php?id=".$row['id']."'>UPDATE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>DELETE</a>";
				echo "</tr>";
			}
		?>
			
  </table>
</div>
		
		<table border="1" width="1000">
			<tr><td>id</td><td>username</td><td>gender</td><td>age</td><td>class</td><td>Have borrowed books</td><td>Use of books</td><td>Borrow time</td><td align="center">operating</td></tr>
			<?php 
			while(@$row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sax']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['bbname']."</td>";
				echo "<td>".$row['bbuseto']."</td>";
				echo "<td>".$row['bbtime']."</td>";
				echo "<td align='center'>
						<a href='users_do_update.php?id=".$row['id']."'>modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
			}
			?>
		</table>
	</center>

</html>