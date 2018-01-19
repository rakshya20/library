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

		<div class="container">
			<h2>BOOKS INFO</h2>
		<table class="table table-hover">
    	<thead>
      	<tr>
				<th>S no.</th>
				<th>Title</th>
				<th>Author</th>
				<th>Type</th>
				<th>Quantity</th>
				<th align="center">OPERATION</th>
			</tr>
    	</thead>
    	<?php 
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['author']."</td>";
				echo "<td>".$row['type']."</td>";
				echo "<td>".$row['count']."</td>";
				echo "<td align='center'>";
				echo "<a href='books_update.php?id=".$row['id']."'>UPDATE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='books_delete.php?id=".$row['id']."'>DELETE</a>";
				echo "</tr>";
			}
		?>
			
  </table>
</div>
	</center>
</html>