<?php 
session_start();
require 'database.php';
require 'functions.php';

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}


$enqueries = $database->query(
	"SELECT * FROM enquery ORDER BY name",array()
)->fetchAll();

// print_r($enqueries);


view('admin',array('enqueries' => $enqueries));


?>