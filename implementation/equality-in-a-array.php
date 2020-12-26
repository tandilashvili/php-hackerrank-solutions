<?php

// URL: https://www.hackerrank.com/challenges/equality-in-a-array

/*
// Determines the minimum number of elements to 
// delete to leave only elements of equal value
function equalizeArray($arr) {
    
    $counter = [];
    $cnt = count($arr);
    
    // Loops through the array numbers 
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // Counts all values of the array
        if (isset($counter[$arr[$i]])) {
            $counter[$arr[$i]] ++;
        } else {
            $counter[$arr[$i]] = 1;
        }
    }
    // The difference is the answer because we want to 
    // leave only elements of equal value that has max count
    return $cnt - max($counter);
}
*/

// Determines the minimum number of elements to 
// delete to leave only elements of equal value.
// Same as the function above but without loops
function equalizeArray($arr) {
    
    $counter = [];
    $cnt = count($arr);
    
    // Counts all the values of an array
    $counter = array_count_values($arr);
    
    // The difference is the answer because we want to 
    // leave only elements of equal value that has max count
    return $cnt - max($counter);
}

echo equalizeArray([3, 3, 2, 1, 3]);
