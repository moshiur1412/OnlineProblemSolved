# Booleans: This is the simplest type. A boolean expresses a truth value. It can be either true or false
<hr>
<?php
$boolean = true;

// var_dump($boolean); // bool(true);
// print_r($boolean); // 1
// echo $boolean; // 1;
// print $boolean; // 1 
// echo gettype($boolean); // boolean

# Converting to boolean 

// var_dump((bool) ""); // bool(false)
// var_dump((bool)1); // bool(true)
// var_dump((bool)0); // bool(false)
// var_dump((bool)-1); // bool(true)
// var_dump((bool)+1); // bool(true)
// var_dump((bool)"test"); // bool(true)
// var_dump((bool)array()); // bool(false)
// var_dump((bool)array(12)); // bool(true)
// var_dump((bool)"false"); // bool(true)