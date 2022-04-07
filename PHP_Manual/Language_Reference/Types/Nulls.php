<pre>
	
	# NULL: The special Null value represents a variable with on value.
	# Null is the only possible value of type null.
	# casting by unset(), checked by is_null() 
</pre>

<hr>
<?php

$var = null;
// Output: NULL
// var_dump($var);

$var = "null";
// Output: NULL
// var_dump((unset)$var);

// Output: bool(false)
var_dump(is_null($var));
