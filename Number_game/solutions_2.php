<?php

function reduce($bits, $value = '0') {
    if (strlen($bits) == 1) {
        // a single bit can be flipped as needed
        return ($bits[0] == $value) ? 0 : 1;
    }
    if ($bits[0] == $value) {
        // nothing to do with this bit, flip the remainder
        return reduce(substr($bits, 1));
    }
    // need to convert balance of string to 1 followed by 0's 
    // then we can flip this bit, and then reduce the new string to 0
    return reduce(substr($bits, 1), '1') + 1 + reduce(str_pad('1', strlen($bits) - 1, '0'));
}

for ($i = 0; $i < 128; $i++) {
    echo "$i (" . decbin($i) . ") takes " . reduce(decbin($i)) . " steps\n";
}