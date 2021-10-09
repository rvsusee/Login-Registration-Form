<?php
	$conn = new mysqli("localhost","root","","registration");
	if($conn->connect_error){
		die("Connection Failed : ".$conn->connect_error);
	}

	//Login
	if(isset($_POST['signin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT name,age,mailid,username,password from userdata where username = '".$username."' and password = '".$password."';";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while ($rows = $result->fetch_assoc()) {
				echo "Login Successfully";
				
				header ('location:dashboard.php');
			}
		}else{
			echo "Login Failed";
			echo "
					<form action='dbconnection.php' method='post'>
						<button name='signout'>Signin Page</button>
					</form>
					";
		}
	}

	//signup
	if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$age = $_POST['age'];
		$mailid = $_POST['mailid'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "INSERT INTO `userdata` (`name`, `age`, `mailid`, `username`, `password`) VALUES ('".$name."', '".$age."', '".$mailid."', '".$username."', '".$password."');";
		$result = $conn->query($sql);
			echo "<h1>".$name." Added Successfully</h1> ";		
		
		echo "
			<form action='dbconnection.php' method='post'>
				<h2><a href='signin.php'>Signin here</a></h1>		

			</form>
			";
	}

	//forget password
	if(isset($_POST['showpass'])){
		$name = $_POST['name'];
		$age = $_POST['age'];
		$mailid = $_POST['mailid'];
		$username = $_POST['username'];
		$sql = "SELECT * FROM `userdata` WHERE `name`='".$name."' and `age`='".$age."' and `mailid`='".$mailid."' and `username`='".$username."';";	

		$result = $conn->query($sql);

		if($result->num_rows > 0){
			echo "<h1>User Found</h1>";
			while($row = $result->fetch_assoc()){
				echo "<br> Name :";
				echo $row["name"];
				echo "<br> Age :";
				echo $row["age"];
				echo "<br> Mail ID :";
				echo $row["mailid"];
				echo "<br> Username :";
				echo $row["username"];
				echo "<br> Password :";
				echo $row["password"];
				echo "<br>";
			}
			echo "<h2><a href='signin.php'>Signin here</a></h1> ";		
		
		}else{
			echo "<h1> User not Found<a href='signup.php'>Signup here</a></h1> ";		
		}
	}




	//signout
	if(isset($_POST['signout'])){
		header('location:signin.php');
	}






?>