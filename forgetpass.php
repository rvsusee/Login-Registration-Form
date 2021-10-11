<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<form action="dbconnection.php"method="POST">
			
		<h1 style="text-align: center;margin-top: 20px;">Forget Password</h1>
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

<!-- <body>
	<form action="dbconnection.php"method="POST">
		<h1>Forget Password</h1>
		<h2>Name</h2>
		<input type="text" name="name">
		<h2>Age</h2>
		<input type="text" name="age">
		<h2>Mail ID</h2>
		<input type="text" name="mailid">
		<h2>Username</h2>
		<input type="text" name="username">
		<button name="showpass">Submit</button>
		<h2>Already know Password<a href="signin.php"> sign in here</a></h2>
	</form>
</body> -->
</html>
