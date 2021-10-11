<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php
		$name = $email = "";
		$nameError = $emailError ="";
		$ErrorFound = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['name'];
			if (empty($name)) {
				$nameError="Name is Mandatory.";
				$ErrorFound = true;
			}
			$email  = $_POST['email'];
			if (empty($email)) {
				$nameError="Email is Mandatory.";
				$ErrorFound = true;
			}
		}
		$thispage = htmlspecialchars($_SERVER["PHP_SELF"]);
			
	?>
	<div>
		<h1>Form</h1>
 		<form action="temp.php" method="POST">
 			<label>name</label>
 			<input type="text" name="name" value="<?= $name?>" />
 			<span><?php echo $nameError; ?></span>
 			<label>Email</label>
 			<input type="text" name="email" value="<?= $email?>"/>
 			<span><?php echo $nameError; ?></span>
 			<button type="submit" >Submit</button>
 		</form>
	</div>

 	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST" and !ErrorFound){
			echo $name;
			echo $email;
		}
	?>

</body>
</html>