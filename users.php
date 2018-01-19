<?php 
//var_dump($_SERVER['REQUEST_METHOD'] == 'POST');
require("Conn.php");
$id = $_SESSION['id'];
$query = "select * from tb_users where name='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
//var_dump($_SSESSION['id']);

?>
<html>
	<?php
	include ("include/header.php") ?>
		<!-- <table border="1" width="600">
			<tr><td>id</td><td>username</td><td>gender</td><td>age</td><td>class</td><td>Have borrowed books</td><td>Use of books</td><td>Borrow time</td><td align="center">operating</td></tr>
			<?php 
				echo "<tr>";
				echo "<td>".$_SESSION['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['gender']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['bbname']."</td>";
				echo "<td>".$row['bbuseto']."</td>";
				echo "<td>".$row['bbtime']."</td>";
			?>
		</table> -->
		
		<a href="index.php">Home</a>
	</center>
</html>