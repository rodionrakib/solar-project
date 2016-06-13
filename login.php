<?php 
session_start();
require 'database.php';
require 'functions.php';

$message = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = trim($_POST['username']);
	$plain_password = trim($_POST['password']);

	if (empty($username) || empty($plain_password)) {
		$message = "Please Enter Both Fields";
	}
	else{
		$user = $database->findUser($username,md5($plain_password));
		if (!$user) {
			$message =  "User Not Found";
		}
		else{
			$_SESSION['username'] = $user['username'];
			header("Location: admin.php");
		}
	}

	
}



view('login',array(
		'message' => $message
	));


?>