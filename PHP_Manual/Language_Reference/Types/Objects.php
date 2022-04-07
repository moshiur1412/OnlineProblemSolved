# Object: To create a new object, use the new statement to instantiate a 
<hr>
<?php

class foo{
	function do_foo(){
		echo "Doing foo";
	}
}

$bar = new foo;
// Output: Doing foo
$bar->do_foo();

echo "<hr>";

$obj = (object) array('1' => 'foo');
// Output: bool(true) 
// var_dump(isset($obj->{'1'}));
// Output: Object(stdClass)#2(1) {["1"] => string(3)"foo"}
// var_dump($obj);
// Output: string(3) "foo"
// var_dump($obj->{'1'});
// Output: Notice: Undefined property: stdClass::$2 in null
// var_dump($obj->{'2'});

// Output: string(1) "1";
// var_dump(key($obj));

$obj = (object) 'ciao';
// Output: string(4) "ciao"
print($obj->scalar);



