<?php

function gray_code($bits) {
    if ($bits == 1) {
        return array('0', '1');
    }
    else {
        $codes = gray_code($bits - 1);
        return array_merge(array_map(function ($v) { return '0' . $v; }, $codes),
                           array_map(function ($v) { return '1' . $v; }, array_reverse($codes))
        );
    }
}

$value = 115;
$bin = decbin($value);
// get sufficient gray codes to cover the input
$gray_codes = gray_code(strlen($bin));
$codes = array_flip($gray_codes);
echo "$bin takes {$codes[$bin]} steps to reduce to 0\n";
// echo the steps
for ($i = $codes[$bin]; $i >= 0; $i--) {
    echo $gray_codes[$i] . PHP_EOL;
}