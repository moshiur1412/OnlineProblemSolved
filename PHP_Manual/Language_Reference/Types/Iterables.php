<pre>
	# Iterables:  Iterable is a pseudo-type introduced in php.
	# The iterable keyword can be used as a data type of a function argument or as the return type of a function:
</pre>

<hr>

<?php

function bar(): iterable {
	return [1,2,3];
}

// Output: 0=>1, 1=>2, 2=>3
// echo '<pre>'; print_r(bar());

// output: 1,2,3
foreach(bar() as $b){
	echo $b;
}

function gen(): iterable {
	yield 1;
	yield 2;
	yield 3;
}

print_r(gen());


function printIterable(iterable $myIterable){
	foreach($myIterable as $item){
		echo $item;
	}
}

$arr = ["a", "b", "c"];

printIterable($arr);
