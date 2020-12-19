<?php

// URL: https://www.hackerrank.com/challenges/flipping-bits

// Flip all the bits (0 --> 1 and 1 --> 0) and 
// print the result as an unsigned integer
function flippingBits($n) {
    
    $bin = decbin($n);
    $bin_o = '';
    
    // Loops through the number's binary bits
    $strl = strlen($bin);
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // 0 will be replaced by 1 and 1 will be replaced by 0
        if ($bin[$i]) {
            $bin_o .= '0';
        } else {
            $bin_o .= '1';
        }
    }
    // Appends ones at the beginning to 32
    $bin_f = str_repeat('1', 32-strlen($bin_o)) . $bin_o;
    
    return bindec($bin_f);
}

echo flippingBits(1015);
