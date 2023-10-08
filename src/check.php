<?php 
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);


	$pass = md5($pass."dwbahjDGwhjdgwakhjDgwaHJKDwgadwadwa47635267dadgwa6");

	$mysql = new mysqli('127.0.0.1', 'root', '','routeup');
	$mysql->query("INSERT INTO `users` (`email`, `pass`) VALUES('$email', '$pass')");
	$mysql->close();

	header('Location: auth.php')
?>