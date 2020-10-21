<?php
class Crud{
	private $conn;
	
	public function __construct($host, $username, $passwd){
		$dsn="mysql:host=$host";
		try{
			$this->conn = new PDO($dsn, $username, $passwd);
			echo "Connection Success! ". "<br>";
		}catch(PDOException $e){
			print "Error!: ". $e->getMessage(). "<br>";
			die();
		}
	}

	public function selectDatabase($dbName){
		$sql ="USE $dbName";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();

		if($stmt->errorCode() !="00000"){
			die($stmt->errorInfo()[2]);
		}

		echo "Database Selected! " . "<br>";
	}

	public function createTable(String $table,array $fields, $primary_key=""){
		$sql = "CREATE TABLE $table(";
		
		foreach($fields as $definition){
			$sql.=$definition['column_name']. ' '.$definition['column_type'].', ';
		}

		$sql.= 'date_added'. " DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,";
		$sql.= "PRIMARY KEY ($primary_key));";

		$stmt = $this->conn->prepare($sql);
		$stmt->execute();

		if($stmt->errorCode() != "00000"){
			die($stmt->errorInfo()[2]);
		}

		echo "Table $table Create Success" . "<br>";
	}

	public function insertData(String $table, array $data){
		$sql = "INSERT INTO $table(";

		foreach($data as $col => $val){
			$sql.= " $col,";
		}

		$sql = substr($sql, 0, -1);

		$sql.=") VALUES (";

		foreach ($data as $col => $val) {
			$sql.=" :$col,";
		}

		$sql = substr($sql, 0,-1);

		$sql.=" )";

		// echo $sql; 
		$stmt= $this->conn->prepare($sql);

		foreach ($data as $column => $value) {
			$stmt->bindParam($column, $value);
		}

		$stmt->execute();

		if($stmt->rowCount()>0){
			echo "Data Insert Success! " . "<br>";
		}else{
			die("Data Insert Fail! ");
		}
	}
}



$db = new Crud("localhost", "root", "");
$db->selectDatabase("testDB");

$column_data = [
	[
		'column_name' => 'id',
		'column_type' => 'int(3) unsigned not null auto_increment'
	],
	[
		'column_name' => 'name',
		'column_type' => 'varchar(200)'
	],
	[
		'column_name' => 'color',
		'column_type' => 'varchar(20)'
	]

];


// $db->createTable("fruits",$column_data, "id");
$data = [ "name" => "Bannana", "color" => "Yellow"];
$db->insertData('fruits', $data);


?>