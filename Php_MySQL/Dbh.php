<?php

class Dbh {
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbname = "ecommerce";

	protected function connect(){
		$dsn = 'mysql:host='. $this->host . ';dbname='.$this->dbname;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $pdo;
	}


	public function getResult($sql){
		
		// $sql = "SELECT * FROM category WHERE Priority >2000";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();

		return $result;
	}

}
// $servername = 
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=ecommerce", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

?>