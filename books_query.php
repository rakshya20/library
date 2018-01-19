<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

	if(@$bn=$_POST['qname'])
		@$query = "select * from tb_books where name='$bn'";
	
	if(@$bt=$_POST['qtype'])
		@$query = "select * from tb_books where type='$bt'"; 
	//var_dump($query);
	$result = mysqli_query($conn,$query);
}
?>
<html>
	<?php include ("include/header.php") ?>
	<center>
		<h1>Search for books</h1>
		<hr/>
		<a href='index.php'>Return to home page</a>&nbsp;&nbsp;&nbsp;
		<a href='manager.php'>Return to Admin Center</a>
		<form action="books_query.php" method="post">
		<table>
			<tr><td>Find by title：</td><td><input type="text" name="qname" value="<?php if(isset($_POST['qname'])) echo $_POST['qname']; ?>"></td><td><input type="submit" name="submit" value="search for"></td></tr>
		</table>
		</form>
		<form action="books_query.php" method="post">
		<table>
			<tr><td>Find by type：</td><td><input type="text" name="qtype" value="<?php if(isset($_POST['qtype'])) echo $_POST['qtype']; ?>"></td><td><input type="submit" name="submit" value="search for"></td></tr>
		</table>
		</form>
		<table border="1" width="300">
			<tr><td>id</td><td>Title</td><td>Types of</td><td>Quantity</td><td align="center">operating</td></tr>
			<?php 
			while(@$row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['count']."</td>";
				echo "<td align='center'>
						<a href='books_do_update.php?id=".$row['id']."'>modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='books_delete.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
			}
			?>
			
		</table>
	</center>

</html>