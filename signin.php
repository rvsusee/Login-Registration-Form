<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signin</title>
</head>
<body>
	<form action="dbconnection.php"method="POST">
		<h1>Sign in</h1>
		<h2>Username</h2>
		<input type="text" name="username">
		<h2>Password</h2>
		<input type="password" name="password">
		<button name="signin">Sign in</button>
		<h2><a href="forgetpass.php">Forget Password</a></h2>
		<h2>Create an account <a href="signup.php">Sign up here</a></h2>
	</form>
</body>
</html>
