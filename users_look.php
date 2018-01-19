<?php 
require("Conn.php");
$query = "select * from tb_users";
$result = mysqli_query($conn,$query);
?>
<html>
	<?php include ("include/header.php") ?>
	<center>
		<h1>user list</h1>
		<div class="container">
			<h2>USERS INFO</h2>
		<table class="table table-hover">
    	<thead>
      	<tr>
				<th>S no.</th>
				<th>Users</th>
				<th>Gender</th>
				<th>Age</th>
				<th align="center">OPERATION</th>
			</tr>
    	</thead>
    	<?php 
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sex']."</td>";
				echo "<td>".$row['age']."</td>";					
				echo "<td align='center'>";
				echo "<a href='users_update.php?id=".$row['id']."'>UPDATE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='users_delete.php?id=".$row['id']."'>DELETE</a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
			
  </table>
</div>
</center>
</html>
