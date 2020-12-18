<?php

// URL: https://www.hackerrank.com/challenges/beautiful-binary-string

/*
// Prints the minimum number of steps needed to make
// the string beautiful. Binary string is beautiful if
// and only if it doesn't contain the substring "010"
function beautifulBinaryString($binary) {

    $res = 0;    
    $s = '010';
    
    // Loops until $s exists in the $binary string
    while (strpos($binary, $s) !== false) {
        
        // Replaces '010' with '011'
        $binary = substr_replace($binary, '1', intval(strpos($binary, $s)+2), 1);
        
        // Increases the result by one
        $res ++;
    }
    return $res;
}
// */

// Does the same as the function above
// Returns substring occurences count in $b
function beautifulBinaryString($b) {
    
    // Returns '010' occurrences count in $binary
    return substr_count($b, '010');
}

echo beautifulBinaryString('0100101010');
