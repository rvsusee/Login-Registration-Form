<?php
	include "dbconnection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<h1 style="text-align: center;margin-top: 20px;">Sign up</h1>
	<?php
		//signup
		if(isset($_POST['signup'])){
			$name = $_POST['name'];
			$age = $_POST['age'];
			$mailid = $_POST['mailid'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "INSERT INTO `userdata` (`name`, `age`, `mailid`, `username`, `password`) VALUES ('".$name."', '".$age."', '".$mailid."', '".$username."', '".$password."');";
			$result = $connection->query($sql);		
			
			echo "<script>
					window.alert('Signup Successfully');
					window.open('signin.php','_SELF');
					</script>";
		}
	?>

	<form action="signup.php"method="POST">
			
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
		<div class="form-group">
			<label name="Password">Password</label>
			<input 
				type="password" 
				name="password"
				placeholder="Enter Password" 
				class="form-control" 
				required
			/>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-dark" type="reset" name="reset">Reset</button>
			<button class="btn btn-success" type="submit" name="signup">Submit</button>	
		</div>
		<label>You have already Account , <a href="signin.php">Signin here!</a></label>
	</form>
</body>
</html>
