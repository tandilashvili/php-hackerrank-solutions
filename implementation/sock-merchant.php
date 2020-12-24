<?php

// URL: https://www.hackerrank.com/challenges/sock-merchant

/*
// Returns an integer representing the number 
// of matching pairs of socks that are available
function sockMerchant($n, $ar) {

    $res = 0;
    $pairs = array();

    // Loops through the socks and 
    // counts each unique value
    foreach ($ar as $item) {
        if(isset($pairs[$item])) {
            $pairs[$item] ++;
        } else {
            $pairs[$item] = 1;
        }
    }
    
    // Counts pairs of socks, if there are 11 
    // green socks, assums that there are 5 pairs 
    foreach ($pairs as $pair) {
        $res += floor($pair / 2);
    }
    return $res;
}
*/

// Returns an integer representing the number of matching
// pairs of socks that are available. Same as the above
// function but without first foreach loop to count values
function sockMerchant($n, $ar) {

    $res = 0;
    $pairs = array();

    // Counts all the unique values of the array
    $pairs = array_count_values($ar);
    
    // Counts pairs of socks, if there are 11 
    // green socks, assums that there are 5 pairs 
    foreach ($pairs as $pair) {
        $res += floor($pair / 2);
    }
    return $res;
}

echo sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]);
