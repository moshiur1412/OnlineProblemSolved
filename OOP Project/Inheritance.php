<?php

class member {

	protected $isLoggedIn = false;
	protected $role ="";
	private static $var =10;
	
	protected $users = [
		["username" => "abc", "password" => "xyz1", "role" => "super admin"],
		["username" => "abcd", "password" => "xyz2", "role" => "admin"],
		["username" => "abcde", "password" => "xyz3", "role" => "user"]
	];

	public function login($user,$pass){
	
		foreach($this->users as $user_info){
			extract($user_info);
			if($username == $user){
				$this->isLoggedIn = true;
				$this->role = $role;
			}
		}
	}

	public function override(){
		// echo self::var."<br>";
		echo "You can override this method" ."<br>";
	}

	public function testAbstractMethod(){
		echo "not changed method This is for abstract keyword testing";
	}

	public final function notOverride(){
		echo "Cannot override final method member::notOverride()" ."<br>";
	}

	public static function staticMethod(){
		echo "Cannot make static method member::staticMethod() non static in class role" ."<br>";
	}
}


class role extends member{

	protected static $count = 10;

	public function __construct($user, $pass){
		 $this->login($user, $pass);

		 if($this->isLoggedIn){

		 	if($this->role == "super admin"){
		 		echo "Your are a super admin" ."<br>";
		 	}
		 	if($this->role == "admin"){
		 		echo "You are a admin" ."<br>";
		 	}
		 	if($this->role == "user"){
		 		echo "You are a normal user" ."<br>";
		 	}

		 }else{
		 	echo "Invalid Username/Password" ."<br>";
		 }

	}

	public function override($m){
		echo "This is the child class with override."."<br>";
		// echo self::$count++ ."<br>";
		// parent::notOverride();
	}

	public function testAbstractMethodw(){
			echo "This is for abstract keyword testing";
		}
	
}


$role = new Role("abcd", "xyz2");
$role->override("m");
// $role->override();

// $role::notOverride();
// $role::staticMethod();
