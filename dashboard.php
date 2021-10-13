<?php
	require 'dbconnection.php';
	if (!isset($_SESSION['username'])) {
		header('location:signin.php');
	}else{
		$name = $_SESSION['name'];
		$age = $_SESSION['age'];
		$mailid = $_SESSION['mailid'];
		$username = $_SESSION['username']; 
		$password = $_SESSION['password'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap.min.css">
</head>
<body class="col-lg-4 container mt-5 card ">
	<?php
		//delete account
		if(isset($_POST['deleteaccount'])){
			$username = $_SESSION['username'];
			$password = $_SESSION['password'];

			$sql = "DELETE FROM `userdata` WHERE username = '".$username."' and password = '".$password."';";
			$isdelete = false;
			if(mysqli_query($connection,$sql)){		
				session_unset();
				echo "<script>
					window.alert('Your Account has been Deleted Successfully !');
					window.open('signin.php','_SELF');
										</script>";
			}
		}
		if (isset($_POST['signout'])) {
			session_unset();
			echo "<script>
					window.alert('Signout Successfully !');
					window.open('signin.php','_SELF');
										</script>";
		}
	?>

	<form class="form-group" action="dashboard.php"method="POST">
			
		<h1 style="text-align: center;margin-top: 20px;">Dashboard</h1>

		<div class="form-control mt-4 mb-4">
			<label>Name :</label>
			<label><?php echo $name;?></label>
		</div>
		<div class="form-control mt-4 mb-4">
			<label>Age :</label>
			<label><?php echo $age;?></label>
		</div>
		<div class="form-control mt-4 mb-4">
			<label>Email ID:</label>
			<label><?php echo $mailid;?></label>
		</div>
		<div class="form-control mt-4 mb-4">
			<label>Username :</label>
			<label><?php echo $username;?></label>
		</div>
		<div class="form-control mt-4 mb-4">
			<label>Password :</label>
			<label><?php echo $password;?></label>
		</div>
		<div class="form-group text-center">

			<button class="btn btn-danger" type="signout" name="signout">Signout</button>
			<button type="deleteaccount" class="btn btn-danger" name="deleteaccount">Delete Account</button>
		</div>
</body>
</html>