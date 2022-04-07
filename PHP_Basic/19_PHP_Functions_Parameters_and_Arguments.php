<?php
# All Functions
# 1. User-defined Functions
# 2. Function Arguments
# 3. Returing Values
# 4. Variable Functions
# 5. Internal (Build-in) Functions
# 6. Anonymous Functions
# 7. Arrow Functions

# User defined functions
function basicFunction(){
    echo "This is the basic function", "<hr>";
}
basicFunction();

# Function arguments way 1
function argumentsFunction(...$params){
    
    # Return an item from the argument list;
    print_r(func_get_arg(1));
   
    # Returns an array comprising a functions argument list
    echo "<pre>"; print_r(func_get_args($params));
    // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
   
    # Returns the number of arguments passed to the function
    echo func_num_args(), "<br>";
    // 4
    print_r($params);
    // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

    echo "<hr>";
}
argumentsFunction(1,2,3,4);

# function arguments way 2
function argumentsFunction2($params1, $params2){
    print_r(func_get_args());
}
$numbers = [1,2,3,4];
argumentsFunction2(...$numbers);



