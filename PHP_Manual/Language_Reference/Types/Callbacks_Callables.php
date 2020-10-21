<pre>
	# Callbacks can be denoted by callbale type hint as of PHP 5.4.
	# This doc used callback type information for the same purpose

	# functions: call_user_func(), usort()
</pre>

<?php 

function my_callback_function(){
	echo "my_callback_function called <br>";
}

class MyClass {
	static function myCallBackMethod(){
		echo "myCallBackMethod called <br>";
	}
}

// Output 1: my_callback_function called
call_user_func('my_callback_function');

// Output 2: myCallBackMethod called
call_user_func(array('Myclass', 'myCallBackMethod'));

$obj = new MyClass();
// Output 3: myCallBackMethod called
call_user_func(array($obj, 'myCallBackMethod'));

// Output 4: myCallBackMethod called
call_user_func('Myclass::myCallBackMethod');

class A {
	public static function who(){
		echo "A called <br>";
	}
}

class B extends A {
	
	public static function who(){
		echo "B<br>";
	}
}

// Output 5: A called 
call_user_func(array('B', 'parent::who'));

class C {
	public function __invoke($name){
		echo 'Hello ', $name. "<br>";
	}
}

$c = new C();
// Output 6: Hello PHP!
call_user_func($c, 'PHP!');

# Callback examp using a closure

$double = function($a){
	return $a*2;
};

$numbers = range(1,5);

echo "<pre>"; print_r($numbers);
// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )
$new_mumbers = array_map($double, $numbers);

// Output: 2 4 6 8 10
print implode(' ', $new_mumbers);


?>

