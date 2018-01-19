<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
$query = "select * from tb_users";
$result = mysqli_query($conn,$query);
?>
<html>
	<?php include ("include/header.php") ?>
	<center>
		<h1>user list</h1>
		<hr/>
		<table border="1" width="1000">
			<tr><td>id</td><td>username</td><td>gender</td><td>age</td><td>class</td><td>Have borrowed books</td><td>Use of books</td><td>Borrow time</td><td align="center">operating</td></tr>
			<?php 
			while($row = mysqli_fetch_assoc($result)){
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
						<a href='users_update.php?id=".$row['id']."'>modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
			}
			?>
			<a href="users_add.php">Add user</a>&nbsp;&nbsp;&nbsp;
			<a href='index.php'>Return to home page</a>&nbsp;&nbsp;&nbsp;
			<a href='manager.php'>Return to Admin Center</a>
		</table>
	</center>

</html>