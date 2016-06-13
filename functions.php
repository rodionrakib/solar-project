<?php 
require 'config.php';

function connect($config)
{
	try {
		$connection =  new PDO('mysql:host=localhost;dbname=smfoappdb',
						$config['username'],
						$config['password']);
		$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		return $connection;
	} catch (Exception $e) {
		return false;
	}
}

function getAll($tableName,$connection)
{
	try {
		$result = $connection->query("SELECT * FROM $tableName");

		return ( $result->rowCount() > 0 ) 
				?$result
				:false;
				 
	} catch (Exception $e) {
		return false;
	}
	
}

function query($query,$bindParams,$connection)
{
	$preparedQuery = $connection->prepare($query);
	// $preparedQuery->bindParam($bindParams,PDO::PARAM_INT);
	$preparedQuery->execute($bindParams);

	$result = $preparedQuery->fetchAll();


	return $result ? $result : false;


}