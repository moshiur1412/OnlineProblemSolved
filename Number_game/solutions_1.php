<?php

function reduce($bits, $prefix, $value = '0') {
    if (strlen($bits) == 1) {
        // a single bit can be flipped as needed
        return array($prefix . ($bits[0] == '0' ? '1' : '0'));
    }
    if ($bits[0] == $value) {
        // nothing to do with this bit, flip the remainder
        $prefix .= $bits[0];
        return reduce(substr($bits, 1), $prefix);
    }
    // need to convert balance of string to 1 followed by 0's 
    $prefix .= $bits[0];
    $steps = reduce(substr($bits, 1), $prefix, '1');
    // now we can flip this bit
    $prefix = substr($prefix, 0, -1) . ($bits[0] == '0' ? '1' : '0');
    $steps[] = $prefix . str_pad('1', strlen($bits) - 1, '0');
    // now reduce the new string to 0
    $steps = array_merge($steps, reduce(str_pad('1', strlen($bits) - 1, '0'), $prefix));
    return $steps;
}

foreach (array(11) as $i) {
    $bin = decbin($i);
    $steps = array_merge(array($bin), reduce($bin, ''));
    echo "$i ($bin) takes " . (count($steps) - 1) . " steps\n";
    print_r($steps);
}
