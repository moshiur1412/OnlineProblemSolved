<?php
// Data Source Name
// $dsn = "mysql:host=localhost";
$dsn = "mysql:host=localhost;dbname=testDB";
// Database Permission
$username = "root";
$passwd = "";
$sql ="CREATE TABLE students(
    id int(4) not null auto_increment,
    name varchar(30) not null,
    email varchar(30) not null,
    mobile varchar(30) not null,
    primary key (id)
);
INSERT INTO students values
(NULL, 'Noman Khan', 'noman@mail.com', '01899009988'), 
(NULL, 'Sahin Khan', 'sahin@mail.com', '01900887766'), 
(NULL, 'Firoj Khan', 'firon@mail.com', '01900998877'), 
(NULL, 'Rashed Khan', 'rashed@test.com', '01566778899'), 
(NULL, 'Sohag Khan', 'sohag@mail.com0', '1788993344')

";
// Error Handling 
try{
	// Passing parameter(PDO)
	// public __construct ( string $dsn [, string $username [, string $passwd [, array $options ]]] );
	$pdo = new PDO($dsn,$username, $passwd); // PHP Data Object 
	// $pdo->query("CREATE DATABASE IF NOT EXISTS testDB") or die("Database Create Failed! ");
	$pdo->query($sql) or die("Table Create Failed!");
	echo "Table Create Success";
}catch(PDOException $e){
	print "Error!: ". $e->getMessage(). "<br>";
	// Distroy Connection 
	die();
}