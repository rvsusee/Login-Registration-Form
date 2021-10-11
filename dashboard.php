<?php
	include 'dbconnection.php';
			echo $name;
			echo $age;
			echo $mailid;
			echo $username;
			echo $password;
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="container mt-4 card">
	<form action="dbconnection.php"method="POST">
			
		<h1 style="text-align: center;margin-top: 20px;">Dashboard</h1>
		<div class="form-group">
			<label name="name form-control">Name:</label>
			<label name="name form-control"><?php echo $name;?></label>
		</div>
		<div class="form-group">
			<label name="age form-control">Age:</label>
			<label name="name form-control"></label>
		</div>
		<div class="form-group">
			<label name="mailid form-control">Mail-ID</label>
			<label name="name form-control"></label>
		</div>
		<div class="form-group">
			<label name="Username form-control">Username</label>
			<label name="name form-control"></label>
		</div>
		<div class="form-group">
			<label name="Password form-control">Password</label>
			<label name="name form-control"></label>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-danger" type="signout" name="signout">Signout</button>
			<button type="deleteaccount" class="btn btn-danger" name="deleteaccount">Delete Account</button>
		</div>
</body>
</html>