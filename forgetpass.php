<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forget Password</title>
</head>
<body>
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
		<h2>Already know Password<a href="signin.php">sign in here</a></h2>
	</form>
</body>
</html>
