<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<form action="dbconnection.php"method="POST">
			
		<h1 style="text-align: center;margin-top: 20px;">Sign up</h1>
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
		<label>You have already Account , <a href="signin.php">click here to Signin!</a></label>
	</form>
</body>
</html>
