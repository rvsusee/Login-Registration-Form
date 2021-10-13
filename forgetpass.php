<?php
	include 'dbconnection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<h1 style="text-align: center;margin-top: 20px;">Forget Password</h1>
	<?
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
					echo "<h2>Your Password is :<?php $pas?></h1> ";		
		
				}
				echo "<h2><a href='signin.php'>Signin here</a></h1> ";		
			
			}else{
				echo "<h1> User not Found<a href='signup.php'>Signup here</a></h1> ";		
			}
		}
	?>

	<form action="forgetpass.php"method="POST">
			
		<div class="form-group">
			<label name="name">Full Name</label>
			<input 
				type="text"
				name="name"
				class="form-control"
				placeholder="Enter Your Full Name" 
				required
			/>	
		</div>
		<div class="form-group">
			<label name="age">Age</label>
			<input 
				type="text"
				name="age"
				class="form-control"
				placeholder="Enter Your Age" 
				required
			/>	
		</div>
		<div class="form-group">
			<label name="mailid">Mail-ID</label>
			<input 
				type="email"
				name="mailid"
				class="form-control"
				placeholder="Enter Your Email ID" 
				required
			/>	
		</div>
		
		<div class="form-group">
			<label name="Username">Username</label>
			<input 
				type="text"
				name="username"
				class="form-control"
				placeholder="Enter Username" 
				required
			/>	
		</div>
		<div class="form-group text-center">
			<button class="btn btn-dark" type="reset" name="reset">Reset</button>
			<button class="btn btn-success" type="submit" name="showpass">Submit</button>
		</div>
		<label>Do You Know Password , <a href="signin.php">click here to Signin!</a></label>
		<br>
		<label>You Don't have an Account ! <a href="signup.php">click here to Signup!</a></label>
	</form>
</body>
</html>
