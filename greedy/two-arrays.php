<?php

// URL: https://www.hackerrank.com/challenges/two-arrays

// Prints YES if all the permutations 
// are valid. Otherwise, prints NO
function twoArrays($k, $A, $B) {

    // Sorts $A with ascending and $B with descending
    // order to pair highest member from the first
    // array with the lowest member from another array
    sort($A);
    rsort($B);
    
    // Loops through the arrays
    $cnt = count($A);
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // Checks every pair to be greater or equal to $k
        if ($A[$i] + $B[$i] < $k) {
            return 'NO';
        }
    }
    
    // If there is success the "return" 
    // statement below will be executed
    return 'YES';
}

echo twoArrays(10, [2, 1, 3], [7, 8, 9]);
