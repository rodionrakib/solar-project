<?php 
session_start();
require 'database.php';
require 'functions.php';

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}



view('admin',array());


?>