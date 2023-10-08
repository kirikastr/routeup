<?php 
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."dwbahjDGwhjdgwakhjDgwaHJKDwgadwadwa47635267dadgwa6");

	$mysql = new mysqli('127.0.0.1', 'root', '','routeup');

	$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();

	if(count($user) == 0){
		header('Location: auth.php');
		die();
		
	}

	setcookie('user', $user['name'], time() + 3600 * 3, "/");

	$mysql->close();

	header('Location: index-profile.php');

?>