<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signin</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<form action="dbconnection.php"method="POST">
			
		<h1 style="text-align: center;margin-top: 20px;">Sign in</h1>
		
		<div class="form-group">

			<label>Username</label>
			<input 
				type="text"
				name="username"
				class="form-control"
				placeholder="Enter Username" 
				required
			/>	
		</div>
		<div class="form-group">
			<label>Password</label>
			<input 
				type="password" 
				name="password"
				placeholder="Enter Password" 
				class="form-control" 
				Prequired
			/>
			<small class="form-text text-muted"><a href="forgetpass.php">Forget Password</a></small>
		</div>
		<label>Don't have an Account ! <a href="signup.php">Signup here</a></label>
		<div class="form-group text-center">
			<button class="btn btn-dark" type="reset" name="signin">Reset</button>
			<button class="btn btn-success" type="submit" name="signin">Submit</button>
		</div>
		
	</form>
</body>
</html>
