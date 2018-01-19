<?php 
include ("include/header.php");
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
		<center><h2>BROWSE USERS</h2></center>




		<div class="form-row">
    	<div class="form-group col-md-6">
		<form action="users_query.php" method="post">
		<table>
			<tr><td>Username：</td><td><input type="text" name="uname" value="<?php if(isset($_POST['uname'])) echo $_POST['uname']; ?>"></td><td><input type="submit" name="submit" value="Search"></td></tr>
		</table>
		</form>	
		</div>
		</div>		
		<div class="container">		 
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
			while(@$row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>".$row['name']."</td>";
				//echo "<td>".$row['gender']."</td>";
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
</center>
</html>