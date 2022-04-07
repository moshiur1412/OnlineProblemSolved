<?php
$dsn = "mysql:host=localhost;dbname=testDB";
$username = "root";
$passwd = "";

try{
	$pdo = new PDO($dsn, $username, $passwd);
	// Insert Operation -> placeholder name
	// $stmt = $pdo->prepare("INSERT INTO students(name, email, mobile) VALUES(:name, :email, :mobile)");
	// Insert Operation -> ? 
	$stmt = $pdo->prepare("INSERT INTO students(name, email, mobile) VALUES(?,?,?)");

	// Placeholder Name 
	// $stmt->bindParam(':name', $name);
	// $stmt->bindParam(':email', $email);
	// $stmt->bindParam(':mobile', $mobile);

	// ? Statements
	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $email);
	$stmt->bindParam(3, $mobile);

	// Insert One Row
	$name ="Abdur Rahman";
	$email = "ar@gmail.com";
	$mobile = "0000000000000";
	$stmt->execute();

	echo "Insert first row"."<br>";

	// Insert One Row
	$name ="Abdur Kahman";
	$email = "kr@gmail.com";
	$mobile = "00000000022222";
	$stmt->execute();
	echo "Insert 2nd row"."<br>";


}catch(PDOException $e){
	print "Error!: ". $e->getMessage() . "<br>";

	die();
}



?>