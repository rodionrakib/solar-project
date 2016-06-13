<?php 

require 'config.php';

// this class represent all task and attribute related to database 

class Database {

	public $connection;


	function __construct() {
		$this->connect();
	}

	public function connect()
	{
		// hmm class method can access constant but not varibale or array ? 
		try {
			// constant in string ...
		$this->connection =  new PDO('mysql:host=localhost;dbname='.DBNAME,
						DBUSERNAME,
						DBPASSWORD);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		return $this->connection;
		} catch (Exception $e) {
			return false;
		}
	}


	public function query($query,$bindParams)
	{
		$preparedQuery = $this->connection->prepare($query);
		print_r($preparedQuery);
		// $preparedQuery->bindParam($bindParams,PDO::PARAM_INT);
		$preparedQuery->execute($bindParams);

		

		return $preparedQuery;

	}

	public function getById($id , $table )
	{
		// also need to make sure table exists !!!
		if (!$table) {
			return false;
		}
		$result = $this->query("
			SELECT * 
			FROM {$table} 
			WHERE id = :id LIMIT 1 ",
			array('id' => $id)

			)->fetchAll();
		return $result ? $result[0] : false;
	}


}



$database = new Database();
$player = $database->getById(99,'player');
if ($player) {
	print_r($player);
}
else {
	echo "player Not Found";
}
// lets test insert action 

// $database->query("INSERT INTO player 
// 	(name,country,joursey_no) 
// 	VALUES 
// 	(:name , :country , :joursey_no) ",
// 	array( "name" => "Aron Finch","country" => "Australia","joursey_no"=>333)

// 	);


