<?php header("Content-Type: text/html; charset=utf-8") ?>
<?php require("Conn.php");?>

<?php 
//If you receive from index.php Sent to the news
	//var_dump($_SERVER['REQUEST_METHOD'] == 'POST');
	$un=$_POST['username'];   //receive ‘username’ for un
	$pw=$_POST['password'];   //receive ‘password’ for pw

	@$query1 = "SELECT * FROM tb_users WHERE name='$un'";
	@$result1 = mysqli_query($conn,$query1);   //Search user name result user name to get the result
	@$row1=mysqli_fetch_assoc($result1);  //Parse the search$un'";  //Search for the user name from the database
	

	if(!$row1){    //If you can not find the user name from the database, the output "user name input error" and provide the "return home" button
		echo "User name input error!";
		echo "<input name='Submit2' type='button' class='btn_grey' value='Return to home page' onclick='history.back();'>";
	}
	
	else{ //If the user name is entered correctly
		$password = $row1['password'];  
		if($pw != $password){  //If you enter the password query with the database is different from the password

			echo "Incorrect password！";                      //Output "Password entered incorrectly" and provide the "Back to home" button
			echo "<input name='Submit2' type='button' class='btn_grey' value='Return to home page' onclick='history.back();'>";
		}
		else{  //If the user name and password are entered correctly

?>
<?php       
			//var_dump($row1);
			//echo "<form action='users.php' method='post'><input type='text' name='id' value='".$row1['id']."'></form>";
			$_SESSION['id']=$row1['id'];
			$_SESSION['name']=$row1['name'];
			$_SESSION['sax']=$row1['sax'];
			$_SESSION['age']=$row1['age'];
			$_SESSION['class']=$row1['class'];
			$_SESSION['bbname']=$row1['bbname'];
			$_SESSION['bbuseto']=$row1['bbuseto'];
			$_SESSION['bbtime']=$row1['bbtime'];

			//var_dump($_SESSION);
			//echo "'$un'<br/>";
			// echo "Landed successfully！";
			// echo "<br/><a href='users.php'>Into the personal center</a>";
			// echo "<br/><a href='index.php'>Return to home page</a>";
			header("location: users.php");
		} 
	}
?>
