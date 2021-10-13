<?php
	include 'dbconnection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signin</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card">
	<h1 style="text-align: center;margin-top: 20px;">Sign in</h1>

	<?php
		//Signin
		if(isset($_POST['signin'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT name,age,mailid,username,password from userdata where username = '".$username."' and password = '".$password."';";
			$result = $connection->query($sql);

			if($result->num_rows > 0){
				echo "<small class='text-success text-center'>Signin Successfully</small>";
				while ($row = $result->fetch_assoc()) {
						$_SESSION['name'] = $row['name'];
						$_SESSION['age'] = $row['age'];
						$_SESSION['mailid'] = $row['mailid'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
					
						// echo $_SESSION['name'];
						// echo $_SESSION['age'];
						// echo $_SESSION['mailid'];
						// echo $_SESSION['username'];
						// echo $_SESSION['password'];
				}
				echo "<script>
					window.alert('Signin Successfully');
					window.open('dashboard.php','_SELF');
					</script>";
			}else{
				echo "<small class='text-danger text-center'>Invalid Username or Password</small>";
			}
		}
	?>
	<form action="signin.php"method="POST">

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
				required
			/>
			<small class="form-text text-muted"><a href="forgetpass.php">Forget Password ?</a></small>
		</div>
		<label>Don't have an Account. <a href="signup.php">Signup here !</a></label>
		<div class="form-group text-center">
			<button class="btn btn-dark" type="reset" name="reset">Reset</button>
			<button class="btn btn-success" type="sumbit" onclick="demo()" name="signin">Submit</button>
		</div>
		
	</form>
</body>
</html>