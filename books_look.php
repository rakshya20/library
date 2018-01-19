<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php 
require("Conn.php");
$query = "select * from tb_books";
$result = mysqli_query($conn,$query);
?>
<html>
	<?php include ("include/header.php") ?>
	<center>
		<h1>Book list</h1>
		<hr/>
		<table border="1" width="700">
			<tr>
				<td>id</td>
				<td>Title</td>
				<td>Author</td>
				<td>Type</td>
				<td>Quantity</td>
				<td align="center">operating</td>
			</tr>
			<?php 
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['author']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['count']."</td>";
				echo "<td align='center'>
						<a href='books_update.php?id=".$row['id']."'>modify</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='books_delete.php?id=".$row['id']."'>delete</a>";
				echo "</tr>";
			}
			?>
			
			<a href='index.php'>Return to home page</a>&nbsp;&nbsp;&nbsp;
			
		</table>
	</center>

</html>