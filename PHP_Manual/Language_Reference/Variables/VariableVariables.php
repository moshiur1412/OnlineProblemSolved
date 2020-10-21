<?php
header('content-type:text/plain');

class foo{
	var $bar = 'I am a bar';
	var $arr = array('I am A', 'I am B', 'I am C');
	var $r = 'I am r';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar');

// I am a bar
echo $foo->bar. "\n";
// I am a bar
echo $foo->{$baz[1]}. "\n";


$start = 'b';
$end = 'ar';
// I am a bar
echo $foo->{$start. $end} . "\n";

$arr = 'arr';
// I am r
echo $foo->{$arr[1]}. "\n";

?>