<?php
	session_start();
	$connection = new mysqli("localhost","root","","registration");
	if($connection->connect_error){
		die("Connection Failed : ".$conn->connect_error);
	}
?>